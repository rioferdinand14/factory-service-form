<!-- MODAL ADD-->
<div class="modal fade" id="TaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Task</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="addTask" data-action="{{ route('projects.create-data') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">                        
                    <div class="row">                                                           
                        @if ( Auth::user()->detail_user->type_user->name === 'Administrator' || Auth::user()->detail_user->type_user->name === 'Super Admin')
                            <div class="col-sm-5 col-md-6">                                                                           
                                <input type="hidden" class="form-control datepicker" name="input_date" />
                                <div class="mb-3">
                                    <label for="project" class="align-items-start">Project:</label>
                                    <input type="text" class="form-control w-100" name="nama_project">
                                </div>                                  
                                <div class="mb-3">
                                    <label for="detail" class="align-items-start">Detail Project:</label>
                                    <textarea type="text" class="form-control w-100" name="detail" style="height: 120px"></textarea>
                                </div>                                  
                                <div class="mb-3">
                                    <label for="eta" class="align-items-start">ETA:</label>
                                    <div class="input-group date w-100" id="datepickerContainer">
                                        <input type="text" class="form-control datepicker" id="etapicker" name="eta_project"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="requestor" class="align-items-start">Request Name:</label>
                                    <input type="text" class="form-control w-100" name="requestor">
                                </div>
                                
                            </div>                            
                            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">                                
                                <div class="mb-3">
                                    <label for="pic" class="align-items-start">PIC:</label>                                    
                                    <select class="form-control w-100" id="pic_project" name="pic_project">
                                        <option selected disabled>Pilih PIC</option>
                                        <option value="Joni R">Joni R</option>
                                        <option value="Alvian">Alvian</option>
                                        <option value="Riyadi">Riyadi</option>
                                        <option value="Twindi">Twindi</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="align-items-start">Category:</label>
                                    <select class="form-control w-100" id="category_project" name="category_project">
                                        <option selected disabled>Pilih Kategori</option>
                                        <option value="Infrastructure">Infrastructure</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Tool Store">Tool Store</option>
                                    </select>
                                </div>
                                <div class="mb-3" >                                        
                                    <label for="status">Status</label>                                                            
                                        <select class="form-control w-100" id="status" name="status">                                        
                                        <option selected value="Open">Open</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>     
                                <div class="mb-3">
                                    <label for="update_status">Update Status</label>
                                    <textarea class="form-control w-100" style="border: 1px solid; border-color:rgb(223, 223, 223); height:190px" name="description_project" id="descript" cols="30" rows="10"></textarea>
                                </div>                                                    
                            </div>
                        @elseif (Auth::user()->detail_user->type_user->name === 'Operation Factory')
                            <div class="col-sm-5 col-md-6">                                                                           
                                <input type="hidden" class="form-control datepicker " id="datepicker" name="input_date" />
                                <div class="mb-3">
                                    <label for="project" class="align-items-start">Project:</label>
                                    <input type="text" class="form-control w-100" name="nama_project">
                                </div>                                  
                                <div class="mb-3">
                                    <label for="detail" class="align-items-start">Detail Project:</label>
                                    <textarea type="text" class="form-control w-100" name="detail" style="height: 120px"></textarea>
                                </div>                                  
                                <div class="mb-3">
                                    <label for="eta" class="align-items-start">ETA:</label>
                                    <div class="input-group date w-100" id="datepickerContainer">
                                        <input type="text" class="form-control datepicker" id="etapicker" name="eta_project"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="requestor" class="align-items-start">Request Name:</label>
                                    <input type="text" class="form-control w-100" name="requestor">
                                </div>                                    
                            </div>
                            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">                                
                                <div class="mb-3">
                                    <label for="category" class="align-items-start">Category:</label>
                                    <select class="form-control w-100" id="category_project" name="category_project">
                                        <option disabled selected>Pilih Kategori</option>
                                        <option value="Infrastructure">Infrastructure</option>
                                        <option value="Maintenance">Maintenance</option>
                                        <option value="Tool Store">Tool Store</option>
                                    </select>
                                </div>                                
                                <div class="mb-3">
                                    <label for="image">Image:</label>
                                    <input class="form-control" type="file" name="photos_img" id="image">
                                </div>                                                                                     
                            </div>
                        @endif                                         
                    </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>