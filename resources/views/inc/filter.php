<div class="col-xs-3 dropdown-file pull-left">
						<select class="form-control" id="doctypeallfiles" onchange="loadfiless()" name="doctypeallfiles" style="float:right;" >
							<option value="Memorandum">Memorandum</option>
						    <option value="Office Order">Office Orders</option>
						    <option value="TUP Orders">TUP Orders</option>
						    <option value="Certificates">Certicates</option>
							<option value="Researches">Researches</option>
							<option value="Grade Sheets">Grade Sheets</option>
						</select>

				
				</div>
				<button class="btn btn-primary "  onclick="location.reload()">Show All</button>
				<div class="col-xs-4 pull-right">
						<div id="custom-search-input">
				          <div class="input-group ">
				                    <input type="text" class="search-query form-control" placeholder="Search a file" id="searchItem" name="searchItem"/>
				            <span class="input-group-btn">
				            <button class="btn btn-danger" type="button">
				              <span class="glyphicon glyphicon-search" style="text-color: #000;" aria-hidden="true"></span>
				            </button>
				            </span>
				          </div>
				        </div>
				</div>