@extends(config('pagman.layout', 'pagman::core.layouts.master'))

@section('requiredJs')
    <script src="{{ asset('stephendevs/pagman/js/app.js') }}" defer></script>
@endsection

@section('pageHeading', 'Theme Options')

    
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sticky-lg">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="list-group list-group-flush p-0">
                            <a class="list-group-item" href="#headerSec">Header Section</a>
                            <a class="list-group-item" href="#contactInfo">Contact Info</a>
                            <a class="list-group-item" href="#homepage">Home Page Settings</a>
                            <a class="list-group-item" href="#saveOptions">Save Options</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <form action="{{ route('pagman.theme.options.update') }}" method="POST" enctype="multipart/form-data" class="">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5>School Logo</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    @if (array_key_exists('aamsnm_logo', $options))
                                    <img src="{{ asset($options['aamsnm_logo']) }}" alt="" style="width: 30%;" class="m-3" /><br />
                                    <input type="file" name="aamsnm_logo" />
                                    @else
                                        <input type="file" name="aamsnm_logo" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="headerSec">
                        <div class="card-body">
                            <div class="mb-3">
                                <h5>Header Section</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            @if (array_key_exists('aamsnm_show_contactinfo_on_header', $options))
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_contactinfo_on_header" id=""  {{ ($options['aamsnm_show_contactinfo_on_header']) ? 'checked' : '' }}>
                                            Show contact info on header section
                                            @else
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_contactinfo_on_header" id="" value="1" >
                                            Show contact info on header section
                                            @endif
                                        
                                      </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            @if (array_key_exists('aamsnm_show_sociallinks_on_header', $options))
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_sociallinks_on_header" {{ ($options['aamsnm_show_sociallinks_on_header']) ? 'checked' : '' }}>
                                            Show Social Links info on header section
                                            @else
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_sociallinks_on_header" id="" value="1" >
                                            Show Social Links info on header section
                                            @endif
                                        
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5>Social Links</h5>
                            </div>
                            <label for="">facebook Link</label>
                            <input type="url" name="aamsnm_facebook" class="form-control" value="{{ (isset($options['aamsnm_facebook'])) ? $options['aamsnm_facebook'] : '' }}" placeholder="Fecabook Link" />
                            <small class="text-danger">
                                {{ $errors->first('aamsnm_facebook') }}
                            </small>
                            <label for="">Instagram Link</label>
                            <input type="url" name="aamsnm_instagram" class="form-control" value="{{ (isset($options['aamsnm_instagram'])) ? $options['aamsnm_instagram'] : '' }}" placeholder="Instagram Link" />
                            <small class="text-danger">
                                {{ $errors->first('aamsnm_facebook') }}
                            </small>
                            <label for="">Twitter Link</label>
                            <input type="url" name="aamsnm_twitter" class="form-control" value="{{ (isset($options['aamsnm_twitter'])) ? $options['aamsnm_twitter'] : '' }}" placeholder="Twitter Link" />
                            <label for="">LinkedIn Link</label>
                            <input type="url" name="aamsnm_linkedin" class="form-control" value="{{ (isset($options['aamsnm_linkedin'])) ? $options['aamsnm_linkedin'] : '' }}" placeholder="LinkedIn Link" />
                        </div>
                    </div>
                    <div class="card" id="contactInfo">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5>Contact Info</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="">Email Address</label>
                                    <input type="email" name="aamsnm_email" class="form-control" value="{{ (isset($options['aamsnm_email'])) ? $options['aamsnm_email'] : '' }}" placeholder="Email Address" />
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="">Phone Number</label>
                                    <input type="phone" name="aamsnm_phone" class="form-control" value="{{ (isset($options['aamsnm_phone'])) ? $options['aamsnm_phone'] : '' }}" placeholder="Phone Number" />
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="map">Google Map Link</label>
                                    <input type="url" class="form-control"  id="map" name="aamsnm_map" value="{{ (isset($options['aamsnm_map'])) ? $options['aamsnm_map'] : '' }}" placeholder="Google Map" />
                                </div>
                                <div class="col-lg-12">
                                    <iframe src="{{ (isset($options['aamsnm_map'])) ? $options['aamsnm_map'] : '' }}" frameborder="0" class="w-100 h-25"></iframe>
                                </div>
                            </div>
                            
                           
                           
                        </div>
                    </div>
        
                  
                    <div class="card" id="homepage">
                        <div class="card-body">
                            <div class="mb-3">
                                <h5>Home Page Settings</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            @if (array_key_exists('aamsnm_show_testimonials_on_homepage', $options))
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_testimonials_on_homepage" id="" {{ ($options['aamsnm_show_testimonials_on_homepage']) ? 'checked' : '' }}>
                                            Show Testimonials listing on home page.
                                            @else
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_testimonials_on_homepage" id="" value="1" >
                                            Show Testimonials listing on home page.
                                            @endif
                                        
                                      </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            @if (array_key_exists('aamsnm_show_team_on_homepage', $options))
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_team_on_homepage" id="" {{ ($options['aamsnm_show_team_on_homepage']) ? 'checked' : '' }}>
                                            Show Team listing on home page.
                                            @else
                                            <input type="checkbox" class="form-check-input" name="aamsnm_show_team_on_homepage" id="" value="1" >
                                            Show Team listing on home page.
                                            @endif
                                        
                                      </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
        
                   <div class="col-lg-4 mt-3 offset-lg-8" id="saveOptions">
                    <input type="submit" value="Update" class="btn btn-md btn-primary rounded w-100" />
                   </div>
        
        
                </form>
            </div>
            

        </div>
        
    </div>
</section>
@endsection