<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
           
            box-sizing: border-box;
        }
        html{
            font-size: 10px;
        }
        body{
            font-family: sans-serif;
            padding: 0;
            margin: 0;
             }
        p{
            font-size: 1.6rem;
        }
        .primary_header{
           font-size: 2.4rem;
           color: rgb(36, 35, 35);
        }
        .secondry_header{
            font-size: 2rem;
        }
        nav{
           width: 100%;
           height: 8rem;
           background-color: #fff;
           display: flex;
           align-items: center;
           margin-bottom: 6.4rem;
           box-shadow: 0 0 30px rgba(10, 4, 4, 0.1);
           position: sticky;
          
          
        }
        .nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container{
            width: 80%;
            margin: 0 auto;
          
        }
        a{
            color: #444;
            text-decoration: none;
        }
        .wrapper{
            display: flex;
            align-items: flex-start;
            gap: 3rem;
            margin-bottom: 6.4rem;
            margin-top: 12rem;
        }
        .post{
            width: 75%;
            display: flex;
            flex-direction: column;
           
            border: rgba(68, 68, 68, 0.233) solid 2px;
            border-radius: 4px;
        }
         .post_header{
             background-color: rgba(236, 234, 234, 0.651);
             border-bottom: rgba(17, 13, 13, 0.233) solid 2px;
         }
         .post_header p{
             font-size: 2rem;
            margin-left: 3rem;
         }
        .post_body{
         
        }
        .body_container{
            width: 95%;
            margin: 0 auto;
        }
        .post_wrapper{
            display: flex;
            flex-direction: column;
            margin-top: 2.4rem;
            margin-bottom: 2.4rem;
            gap: 1.5rem;
        }
      
        .test{
           display: flex;
           flex-direction: column;
           border: rgba(68, 68, 68, 0.233) solid 2px;
            border-radius: 4px;
        }
        .post_title{
            background-color: rgba(236, 234, 234, 0.651);
            border-bottom: rgba(68, 68, 68, 0.233) solid 2px;
        }
        .post_title a{
          margin-left: 3rem;
          font-size: 2rem;
          display: flex;
          height: 6.5rem;
          align-items: center;
          color: rgba(20, 176, 224, 0.966);
        }
        .post_text{
          
        }
        .catagory span{
            font-size: 2rem;
            color: rgb(37, 36, 36);
        }
        .post_text .catagory p{
            font-size: 1.8rem;
            color: rgb(37, 36, 36);
        }
        .post_text p{
            font-size: 1.6rem;
            color: rgb(87, 84, 84);
            line-height: 1.5;
            margin-left: 3rem;
            margin-right: 3rem;
        }

        .post_catagories{
            width: 24%;
            display: flex;
            flex-direction: column;
            border: rgba(68, 68, 68, 0.233) solid 2px;
            border-radius: 4px;
            
        }
         .catagory_header{
            border-bottom: rgba(68, 68, 68, 0.233) solid 2px;
            border-radius: 1px;
         }
        .catagory_body{
            border-bottom: rgba(68, 68, 68, 0.233) solid 2px;
            border-radius: 1px;
        }
         .catagory_header p{
            margin-left: 3rem;
            font-size: 2rem;
            color: rgb(37, 36, 36);
         }
        .catagory_body a{
          margin-left: 3rem;
          font-size: 2rem;
          display: flex;
          height: 6.5rem;
          align-items: center;
          color: rgba(20, 176, 224, 0.966);
        }
        .catagory_body:last-child{
            border-bottom: none;
        }
        .sticky{
            position: fixed;
            top: 0;
            bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
            height: 8rem; 
            width: 100%;
        }

        .activated{
            font-size: 3rem;
            fill: rgba(20, 176, 224, 0.966);
        } 

         .not_activated{
            font-size: 3rem;
            fill: rgba(85, 85, 85, 0.5);
        } 

        .icons{
            display: flex;
            align-items: center;
            gap: 4rem;
            margin-left: 4rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }
        .icons span{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .icons span p{
          font-size: 2rem;
          margin: 0;
        }
    </style>
</head>
<body>
    <nav class="sticky">
        <div class="container nav">
            <div class="left_nav">
                <a href="{{url('/')}}" class="secondry_header">LarArticle</a>
            </div>
            <div class="right_nav">
                <a class="secondry_header" href="{{route('login')}}">Login</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="container wrapper">
            <div class="post">
                <div class="post_header">
                    <p>Articles</p>
                </div>
                <div class="post_body">

                    {{-- articles start here --}}
                    <div class="post_wrapper body_container">
                        @foreach ($articles as $article)
                            <div class="test">
                                <div class="post_title">
                                    <a href="{{url('single_article',["article" => $article])}}">{{$article->title}}</a>
                                </div>
                                <div class="post_text">
                                    <p class="catagory"><span>Catagory: {{$article->catagory->catagory_name}}</span></p>
                                    <p>{{$article->body}}
                                    </p>

                         {{-- article like and comment secrion end here --}}
                                    <div class="icons">
                                        <span>
                                            <a href="">
                                       <svg class="not_activated" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
                                    </a>
                                       <p>10</p>
                                   </span>
                                <span>
                                   
                        @auth
                            @if ($data = $article->likes->where(
                                'user_id',Auth::user()->id)->first())
                                @if ($data->is_liked)
                                     {{-- <p>true</p> --}}
                                     <a href="{{url('article_like',["article" => $article])}}">
                                        <svg class="activated"  stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg>
                                    </a>
                                @else
                                   {{-- <p> inter false</p> --}}
                                   <a href="{{url('article_like',["article" => $article])}}">
                                    <svg class="not_activated" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path></svg>
                                 </a>
                                @endif
                                  
                                @else
                                {{-- <p>not inter false</p> --}}
                                <a href="{{url('article_like',["article" => $article])}}">
                                    <svg class="not_activated" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path></svg>
                                 </a>
                            @endif
                        @endAuth
        
                        @if(!Auth::check())
                        <a href="{{url('article_like',["article" => $article])}}">
                            <svg class="not_activated" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M466.27 286.69C475.04 271.84 480 256 480 236.85c0-44.015-37.218-85.58-85.82-85.58H357.7c4.92-12.81 8.85-28.13 8.85-46.54C366.55 31.936 328.86 0 271.28 0c-61.607 0-58.093 94.933-71.76 108.6-22.747 22.747-49.615 66.447-68.76 83.4H32c-17.673 0-32 14.327-32 32v240c0 17.673 14.327 32 32 32h64c14.893 0 27.408-10.174 30.978-23.95 44.509 1.001 75.06 39.94 177.802 39.94 7.22 0 15.22.01 22.22.01 77.117 0 111.986-39.423 112.94-95.33 13.319-18.425 20.299-43.122 17.34-66.99 9.854-18.452 13.664-40.343 8.99-62.99zm-61.75 53.83c12.56 21.13 1.26 49.41-13.94 57.57 7.7 48.78-17.608 65.9-53.12 65.9h-37.82c-71.639 0-118.029-37.82-171.64-37.82V240h10.92c28.36 0 67.98-70.89 94.54-97.46 28.36-28.36 18.91-75.63 37.82-94.54 47.27 0 47.27 32.98 47.27 56.73 0 39.17-28.36 56.72-28.36 94.54h103.99c21.11 0 37.73 18.91 37.82 37.82.09 18.9-12.82 37.81-22.27 37.81 13.489 14.555 16.371 45.236-5.21 65.62zM88 432c0 13.255-10.745 24-24 24s-24-10.745-24-24 10.745-24 24-24 24 10.745 24 24z"></path></svg>
                           </a>
                              @endif
                            <p>{{$article->likes->where('is_liked',true)->count()}}</p> 
                        </span>
                     </div>
                     {{-- article like and comment secrion end here --}}
                                </div>
                            </div>
                        @endforeach
                 </div>
        {{-- articles start here --}}
        
            </div>
            </div>
            <div class="post_catagories">
               <div class="catagory_header">
                    <p>Catagory</p>
                </div>

                <div class="all catagory catagory_body">
                    <a href="{{url('/articles/all_catagory')}}">All Catagory({{$catagory->count()}})</a>
                </div>
                    @foreach ($catagory as $catagory)
                        <div class="catagory_body">
                            <a href="{{url('articles/catagory',["catagory_name" =>   $catagory->catagory_name])}}" class="catagory_links">{{$catagory->catagory_name}}({{$catagory->articles->count()}})</a>
                        </div>
                    @endforeach
             </div>
        </div>
    </main>
</body>
</html>


