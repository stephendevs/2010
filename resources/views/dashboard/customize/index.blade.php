@extends(config('pagman.layout', 'pagman::core.layouts.master'))

@section('requiredJs')
    <script src="{{ asset('stephendevs/pagman/js/app.js') }}" defer></script>
@endsection

@section('pageHeading', 'Customize Site')

    
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="customizationTab" role="tablist">
                            <li class="nav-item">
                                <a href="#siteheader" class="nav-link" data-toggle="tab">Header</a>
                            </li>
                            <li class="nav-item">
                              <a href="#footer" class="nav-link" data-toggle="tab">Footer</a>
                          </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Another link</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link active" data-toggle="tab">Contact Info</a>
                            </li>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                  <div class="card-body">
                      
                        <div class="tab-content mt-4">

                            <div class="tab-pane" id="siteheader">
                                <form method="POST" action="{{ route('aamsnm.dashboard.customize.header') }}" class="row" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12">
                                        <h6>AAMSNM Logo</h6><hr />
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('storage/'.option('aamsnm_logo', 'media/aamsnm_logo.jpg')) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="file" name="aamsnm_logo" />
                                    </div>

                                    <div class="col-lg-12 mt-4"><h6>Header Menu</h6><hr /></div>
                                    <div class="col-lg-4">
                                        <select name="aamsnm_header_menu" id="" class="form-control">
                                            <option value="header">Main Menu</option>
                                            <option value="hell">Hell Menu</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Update" class="btn btn-sm btn-primary float-right" />
                                    </div>
                                </form>
                            </div>

                            <!-- Contact Info -->
                            <div class="tab-pan show activee" id="contact">
                                <form action="{{ route('aamsnm.dashboard.customize.contact') }}" method="POST" class="row">
                                    @csrf
                                    <div class="col-lg-12"><h6>Edit Contact Info</h6><hr /></div>

                                    <div class="col-lg-12 mb-4">
                                        <label for="aamsnmAddress">Address</label>
                                        <small>(Display on the first column of the footer)</small>
                                        <textarea name="aamsnm_address" id="aamsnmAddress" cols="30" rows="3" class="form-control" placeholder="Enter Address">{{ (old('aamsnm_address')) ? old('aamsnm_address') : pm_option('aamsnm_address', '') }}</textarea>
                                        <small class="text-danger">{{ $errors->first('aamsnm_address') }}</small>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="aamsnmEmail">Email Address</label>
                                        <input type="email" name="aamsnm_email" class="form-control" value="{{ (old('aamsnm_email')) ? old('aamsnm_email') : pm_option('aamsnm_email', 'anume.nursing@ymail.com') }}" />
                                        <small class="text-danger">{{ $errors->first('aamsnm_email') }}</small>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="aamsnmPhone">Phone</label>
                                        <input type="test" name="aamsnm_phone" class="form-control" value="{{ (old('aamsnm_phone')) ? old('aamsnm_phone') : pm_option('aamsnm_phone', '0774285504') }}" />
                                        <small class="text-danger">{{ $errors->first('aamsnm_phone') }}</small>
                                    </div>

                                    <div class="col-lg-12 mt-4"><small><b>Social Links</b></small><hr /></div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="save changes" />
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection