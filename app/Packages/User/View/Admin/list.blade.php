
    <div class="row">
        <div class="col-md-12">
          
            
            <div class="panel">
                <div class="panel-header bg-primary">
                    <h3>Search</h3>
                </div>
                <div class="panel-content">
                    <div class="row">
                        <div class="form-group">
                            <form method="get">
                                <div class="col-sm-3">
                                    <select name="group" class="form-control">
                                        <option value="all">all group</option>
                                        <option value="id">id</option>
                                        <option value="name">name</option>
                                        <option value="mobile">mobile</option>
                                    </select>
                                </div>
                                <div class="col-sm-5 inside-tooltip">
                                    <input value="{{\Input::get('search')}}" type="text" name="search"
                                           class="form-control input-sm"
                                           placeholder="search">
                                    <i class="fa fa-question-circle c-blue" rel="popover" data-container="body"
                                       data-toggle="popover" data-placement="left"
                                       data-content=" " data-original-title="search"></i>
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-info">
                                        search
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                           
                               
                            </div>
                            <div class="col-sm-12">
                                @if(\Input::get('search'))

                                    content search:
                                    {{\Input::get('search')}}

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>  
                    
</div>
                


            