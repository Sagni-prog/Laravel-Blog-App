<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="asset{{'../../home/uploads/favicon.png'}}">

       @include('home.layouts.styles')
        
       @include('home.layouts.scripts')

       @include('home.layouts.dependencies')
       
       

    </head>
    <body>
        @include('home.layouts.top')

        @include('home.layouts.header')

        @include('home.layouts.navbar')      

    @if($setting)
       @if($setting->news_ticker_status == 'Show') 
        <div class="news-ticker-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="acme-news-ticker">
                            <div class="acme-news-ticker-label">Latest News</div>
                            <div class="acme-news-ticker-box">
                                <ul class="my-news-ticker">
                                    @php $i = 0;  @endphp

                                        @foreach ($posts as $post)
                                           @php $i++; @endphp
                                           @if ($i > $setting->news_ticker_number) 
                                           @break  
                                           @endif
                                           <li><a href="">{{$post->post_title}}</a></li>
                                        @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endif
  @endif
        
        @yield('home_content')
        
       @include('home.layouts.ad_2')
        
        <div class="search-section">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Title or Description">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select Category</option>
                                    <option value="">Sports</option>
                                    <option value="">National</option>
                                    <option value="">Lifestyle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="" class="form-select">
                                    <option value="">Select SubCategory</option>
                                    <option value="">Football</option>
                                    <option value="">Cricket</option>
                                    <option value="">Baseball</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-content">
            <div class="container">
                <div class="row">

                   @include('home.layouts.post')

                   @include('home.layouts.sidebar')

                </div>
            </div>
        </div>
        
        
       @include('home.layouts.video_content')
        
        @include('home.layouts.ad_5')

        @include('home.layouts.footer')

        @include('home.layouts.copyright')
		
        <script src="asset{{'../../home/js/custom.js'}}"></script>        
		
   </body>
</html>