<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;

class FileTagged extends Notification
{
    use Queueable;
    protected $file;
    protected $area;
    protected $parameter;
    protected $paramletter;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($file, $parameter, $area)
    {
        
        $this->file = $file;
        $this->area = $area;
        $this->parameter = $parameter;
        if($area == "area10")
            $this->paramletter = substr($parameter, 2, 2);
        else
            $this->paramletter = substr($parameter, 1, 1);


    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'file' => $this->file,
            'area' => $this->area,
            'parameter' => $this->parameter, 
            'paramletter' => $this->paramletter,
            'user' => auth()->user()
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
