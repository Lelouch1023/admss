<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use \Input as Input;
use App\Notifications\FileTagged;
use App\File;
use App\User;
use Carbon\Carbon;
use DB;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use TextAnalysis\Tokenizers\WhitespaceTokenizer;
use TextAnalysis\Analysis\FreqDist;
use Smalot\PdfParser\Parser;
use Smalot\PdfParser\Page;
use TextAnalysis\Filters\LowerCaseFilter;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $files = File::orderBy('created_at', 'desc')->paginate(10); 

        // return view('home')->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|max:1999|mimes:pdf'
        ]);

        //Handle File Upload
        if ($request->hasFile('file')) {

            //Get file name with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get the Ext
            $extension = $request->file('file')->getClientOriginalExtension();

            $filesize = $request->file('file')->getClientSize();

            //Filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload the file
            $path = $request->file('file')->storeAs('public/uploads', $fileNameToStore);

            $file = new File;
            $file->user_id = auth()->user()->id;
            $file->name = $fileNameToStore;
            $file->file_type = Input::get('doctype');
            $file->save();
            //dd($request->input('doctype'));

            $tags = array();
            $tags = $this->extract($file->name);
        $tagdup = array();
        $valA = array();
        if(count($tags) > 0){
           $arrkeys = array_keys($tags);
                
            //gets the area name based on area_id from tags table
            $values = array();
            $valueD = array();
            for($i=0; $i<count($arrkeys); $i++){
                $valueD[] = DB::table('areas')
                            ->select('area_id', 'name')
                            ->where('area_id', '=', $arrkeys[$i])
                            // ->orderBy(DB::raw("FIELD(area_id, '".join(',',$arrkeys)."')"))
                            ->get();
                //sorts the results from highest to lowest
            }
            
        
           
            foreach($valueD as $value){
                foreach($value as $vals){
                        $valA[] = $vals;
                }
            }
         //saves the area_name and area_id into on array
            // for($i = 0; $i < count($arrkeys); $i++){
            //     foreach($valueD as $values){

            //         if($arrkeys[$i] == $values[$i]->area_id){
            //             $val[] = array(
            //                 'area_id'=> $values[$i]->,
            //                 'name' => $values[$i]->name
                    
            //             );
            //         }
            //     }
            // }
            $tagsfin = array();

            //save the tags and with area_name
            foreach($tags as $ind => $data){
                foreach($tags[$ind] as $key => $value){
                    $tagsfin[] = array(
                        'area_id' => $ind,
                        'parameters' => $value
                    );
                }
            }

            //removes duplicated parameters
            $tagdup = array_map("unserialize", array_unique(array_map("serialize", $tagsfin)));
        }//endif
            $subparam = array();
        //s_1 = s.1
            foreach($tagdup as $key => $val){
                if($tagdup[$key]['area_id'] == "area10")
                $tagdup[$key]['dot'] = preg_replace('/[^A-Za-z0-9]/', '.', substr($tagdup[$key]['parameters'], 3, strlen($tagdup[$key]['parameters'])));
                else
                $tagdup[$key]['dot'] = preg_replace('/[^A-Za-z0-9]/', '.', substr($tagdup[$key]['parameters'], 2, strlen($tagdup[$key]['parameters'])));
            } 
        //!!!va

        // end of if hasFile
         //  sdd($tags);
         return view('posts.tag')->with('tags', $tagdup)->with('val', $valA)->with('filename', $file->name);

        }

        //notifications algo
       //  $tag = $request->input('tags');
       //  $users = User::all();

       // // var_dump($user);
       //  foreach($users as $user){
       //      if($user->area_handled == $request->input('tags')){
       //      //     //$user = User::where('area_handled', $request->input('tag'))->first();
       //       // Notification::send($user, new FileTagged(auth()->user()->tags()));
       //          $user->notify(new FileTagged($fileNameToStore));
       //      }
       //  }

       //  return redirect('/home')->with('success', 'Post Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // For adding keywords

    // public function addkeyword(Request $request)

    public function show($id)
    {
        $file = File::find($id);
        //
        return view('posts.show')->with('posts', $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $files = File::find($id);
        return view('posts.edit')->with('files', $files);

         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[

            // 'tags' => 'required',
            'file' => 'required|max:1999|mimes:doc,docx,pdf'


        ]);

        // Handle File Upload
        if ($request->hasFile('file')) {

            //Get file name with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get the Ext
            $extension = $request->file('file')->getClientOriginalExtension();

            $filesize = $request->file('file')->getClientSize();

            //Filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload the file
            //$path = $request->file('file')->storeAs('public/uploads', $fileNameToStore);

        $file = File::find($id);

        $file->user_id = auth()->user()->id;

        $file->name = $fileNameToStore;

        $file->file_type = $extension;

        $file->save();
        
       



        //notif algorithm
       //  $tag = $request->input('tags');
       //  $users = User::all();

       // // var_dump($user);
       //  foreach($users as $user){
       //      if($user->area_handled == $request->input('tags')){
       //      //     //$user = User::where('area_handled', $request->input('tag'))->first();
       //       // Notification::send($user, new FileTagged(auth()->user()->tags()));
       //          $user->notify(new FileTagged($fileNameToStore));
       //      }
         }

        //return redirect('/home')->with('success', 'File Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $file = File::find($id);

        if(auth()->user()->id !== $file->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }else{
        $file->isDeleted = 1;
        $file->deleted_at = Carbon::now();
        $file->save();

        return redirect('/uploads')->with('success', 'File Deleted');
        }
    }

    public function download(){

        $file = DB::table('files')->get();
        return view('home', compact(file));
    }

    public function search(Request $request){

        $term = $request->term;
        $files = File::where('name', 'LIKE', '%'.$term.'%')->get();
        //return $files;

        if(count($files) == 0){
            $searchResult = ['No results.'];
        }
        else{
            foreach($files as $file){
                $searchResult[] = $file->name;            }
        }

        return $searchResult;

    }

    public function result(Request $request){

        $term = Input::get('searchItem', '');
        $files = File::where('name', 'LIKE', '%'.$term.'%')->paginate(10);

        return view('desktop.pages.searchResult')->with('files', $files);
        //return $files;

        
    }

    public function view($id){
         $files = File::find($id)->get();

         return view('posts.view')->with('files', $files);
    }

    public function restore($id){

        $files = File::find($id);

        if(auth()->user()->id !== $files->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }else{
            $files->isDeleted = 0;
            $files->save();

            return redirect('/uploads')->with('success', 'Restored successfully!');
        }
    }

    public function destroy($id){

        $files = File::find($id);

        if(auth()->user()->id !== $files->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }else{
            
            Storage::delete('public/uploads/'.$files->name);
            $files->delete();
            return redirect('/bin')->with('success', 'Permanently deleted successfully!');
        }
    }

    public function extract($filename){
        //public\storage\uploads\python3handson_1508307603.pdf
        $pdfFilePath = public_path() . "\storage\uploads\\" . $filename; //RUSH-SCAN_hardbound
        $PDFParser = new Parser();


        // Create an instance of the PDF with the parseFile method of the parser
        // this method expects as first argument the path to the PDF file
         
        $pdf = $PDFParser->parseFile($pdfFilePath);
         
        $text = $pdf->getText();
        // Extract ALL text with the getText method
        
        // stop words
        $commonWords = array('a','able','about','above','abroad','according','accordingly','across','actually','adj','after','afterwards','again','against','ago','ahead','ain\'t','all','allow','allows','almost','alone','along','alongside','already','also','although','always','am','amid','amidst','among','amongst','an','and','another','any','anybody','anyhow','anyone','anything','anyway','anyways','anywhere','apart','appear','appreciate','appropriate','are','aren\'t','around','as','a\'s','aside','ask','asking','associated','at','available','away','awfully','b','back','backward','backwards','be','became','because','become','becomes','becoming','been','before','beforehand','begin','behind','being','believe','below','beside','besides','best','better','between','beyond','both','brief','but','by','c','came','can','cannot','cant','can\'t','caption','cause','causes','certain','certainly','changes','clearly','c\'mon','co','co.','com','come','comes','concerning','consequently','consider','considering','contain','containing','contains','corresponding','could','couldn\'t','course','c\'s','currently','d','dare','daren\'t','definitely','described','despite','did','didn\'t','different','directly','do','does','doesn\'t','doing','done','don\'t','down','downwards','during','e','each','edu','eg','eight','eighty','either','else','elsewhere','end','ending','enough','entirely','especially','et','etc','even','ever','evermore','every','everybody','everyone','everything','everywhere','ex','exactly','example','except','f','fairly','far','farther','few','fewer','fifth','first','five','followed','following','follows','for','forever','former','formerly','forth','forward','found','four','from','further','furthermore','g','get','gets','getting','given','gives','go','goes','going','gone','got','gotten','greetings','h','had','hadn\'t','half','happens','hardly','has','hasn\'t','have','haven\'t','having','he','he\'d','he\'ll','hello','help','hence','her','here','hereafter','hereby','herein','here\'s','hereupon','hers','herself','he\'s','hi','him','himself','his','hither','hopefully','how','howbeit','however','hundred','i','i\'d','ie','if','ignored','i\'ll','i\'m','immediate','in','inasmuch','inc','inc.','indeed','indicate','indicated','indicates','inner','inside','insofar','instead','into','inward','is','isn\'t','it','it\'d','it\'ll','its','it\'s','itself','i\'ve','j','just','k','keep','keeps','kept','know','known','knows','l','last','lately','later','latter','latterly','least','less','lest','let','let\'s','like','liked','likely','likewise','little','look','looking','looks','low','lower','ltd','m','made','mainly','make','makes','many','may','maybe','mayn\'t','me','mean','meantime','meanwhile','merely','might','mightn\'t','mine','minus','miss','more','moreover','most','mostly','mr','mrs','much','must','mustn\'t','my','myself','n','name','namely','nd','near','nearly','necessary','need','needn\'t','needs','neither','never','neverf','neverless','nevertheless','new','next','nine','ninety','no','nobody','non','none','nonetheless','noone','no-one','nor','normally','not','nothing','notwithstanding','novel','now','nowhere','o','obviously','of','off','often','oh','ok','okay','old','on','once','one','ones','one\'s','only','onto','opposite','or','other','others','otherwise','ought','oughtn\'t','our','ours','ourselves','out','outside','over','overall','own','p','particular','particularly','past','per','perhaps','placed','please','plus','possible','presumably','probably','provided','provides','q','que','quite','qv','r','rather','rd','re','really','reasonably','recent','recently','regarding','regardless','regards','relatively','respectively','right','round','s','said','same','saw','say','saying','says','second','secondly','see','seeing','seem','seemed','seeming','seems','seen','self','selves','sensible','sent','serious','seriously','seven','several','shall','shan\'t','she','she\'d','she\'ll','she\'s','should','shouldn\'t','since','six','so','some','somebody','someday','somehow','someone','something','sometime','sometimes','somewhat','somewhere','soon','sorry','specified','specify','specifying','still','sub','such','sup','sure','t','take','taken','taking','tell','tends','th','than','thank','thanks','thanx','that','that\'ll','thats','that\'s','that\'ve','the','their','theirs','them','themselves','then','thence','there','thereafter','thereby','there\'d','therefore','therein','there\'ll','there\'re','theres','there\'s','thereupon','there\'ve','these','they','they\'d','they\'ll','they\'re','they\'ve','thing','things','think','third','thirty','this','thorough','thoroughly','those','though','three','through','throughout','thru','thus','till','to','together','too','took','toward','towards','tried','tries','truly','try','trying','t\'s','twice','two','u','un','under','underneath','undoing','unfortunately','unless','unlike','unlikely','until','unto','up','upon','upwards','us','use','used','useful','uses','using','usually','v','value','various','versus','very','via','viz','vs','w','want','wants','was','wasn\'t','way','we','we\'d','welcome','well','we\'ll','went','were','we\'re','weren\'t','we\'ve','what','whatever','what\'ll','what\'s','what\'ve','when','whence','whenever','where','whereafter','whereas','whereby','wherein','where\'s','whereupon','wherever','whether','which','whichever','while','whilst','whither','who','who\'d','whoever','whole','who\'ll','whom','whomever','who\'s','whose','why','will','willing','wish','with','within','without','wonder','won\'t','would','wouldn\'t','x','y','yes','yet','you','you\'d','you\'ll','your','you\'re','yours','yourself','yourselves','you\'ve','z','zero');
             
        // lowercase all keywords
        $tolower = new LowerCaseFilter();
        $loweredText = $tolower->transform($text); 
       
        // remove punctuation marks
        $punclessText = preg_replace('/[^A-Za-z]/', ' ', $loweredText);;
        // new instance for the tokenizer
        $tokenizer = new WhitespaceTokenizer();
        $tokens = $tokenizer->tokenize($punclessText);

        // remove stopwords
        $var = array_diff($tokens, $commonWords);
        // new instance for FregDist
        $freqDist = new FreqDist($var);
        // $cnt = count($freqDist->getHapaxes());        
        //$cnt2 = $freqDist->getTotalTokens();
        // $cnt3 = $freqDist->getTotalUniqueTokens();

        //get the keys from highest to lowest
        $alltxt = $freqDist->getKeyValuesByFrequency();
        
        // $cnt5 = $freqDist->getValues();
        // $cnt6 = $freqDist->getWeightPerToken();
        $cnt6 = array();

            foreach($alltxt as $key => $value){
                //extract texts with greater than 10 frequency if the highest frequency is 10
                if(reset($alltxt) > 10){
                    if($value > 10){
                        $cnt6[] = $key;

                    }
                }else{
                    $cnt6[] = $key;
                }

               
         }
         $result = array();
         $result = $this->compareKeyword($cnt6);
     
        //  //$ress = $result->area_id;
        // // echo gettype($result);
        //  // $this->compareKeyword($cnt6);
         $res = $this->group_by($result, "area_id");
         //$this->group_by($result, "area_id");
         usort($res, function($a, $b) {
             return count($a) <=> count($b);
        });
        $rev = array_reverse($res);

        // foreach ($galleries as $gallery) {
        //    $grouped[$gallery['post_id']][] = $res['area_id'];
        // }

        // print($rev[0][$rev[0][rev[0][$rev[0]['area_id']]]]);
        // for($i = 0 $i < count($rev); $i++){
        //     for($j = 0 $j < count($rev[$i])){
        //         foreach($rev[$i][$rev[$j]] as $val)
        //             $rev[$i] [$rev[$j] [$rev[$i] [$rev[$j] [$rev[$i] [$rev[$j] []  ]]]]  ] = ceil(value)
        //     }
        // }


        //gets the parameters tagged per area, $key = areas, $value = parameter
        $tag = array();
        $key = array('parameter');
    
        foreach($rev as $revA){
            foreach($revA as $revB){
                $tag[$revB->area_id][]  = $revB->parameter;        

            }
        } 

        return $tag;
    

    }

    /**
    * Function comparing the keyword extracted from PDF to actual keywords on database
    *
    * @return array
    */
    public function compareKeyword(Array $array){

        $files = DB::table('keywords')->get();
        $results = array();
        foreach($array as $arrayVal){
            foreach($files as $file){

                // echo "<br>".$file->keyword." =?= ".$arrayVal."<br>";
                if($file->keyword == $arrayVal){

                    // echo "true";
                     $results[] = $file;
                }    
            }

        }

        return $results;
    }

    /**
    * Groups the array depending on the number of occurences of area_id
    *
    * @return $group
    */
    public function group_by($array, $key) {
        $group = array();
        foreach($array as $val) {
            $id = $val->$key;
            $group[$id][] = $val;
         }
        return $group;
    }

    public function wordtest(Request $request){
        $this->validate($request,[
            'file' => 'required|max:1999|mimes:pdf,docx'
        ]);
        if($request->has('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get the Ext
            $extension = $request->file('file')->getClientOriginalExtension();
            if($extension == "docx")
                echo 'this is a doc';
            else if ($extension == "pdf")
                echo 'this is a pdf';
        }
    }    
}
