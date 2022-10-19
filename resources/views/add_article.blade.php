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
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: rgb(231, 225, 225);
        }
        .container{
            display: flex;
            height: 100vh;
            align-items: center;
        }
        .sidebar{
            width: 20%;
            height: 100%;
            background-color: rgb(30, 52, 73);
        }
      
        .sidebar_header{
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-color: rgb(20, 35, 49); */
            background-color: rgb(30, 52, 73);
            border-bottom: #fff solid 2px;
            height: 9rem;
            
        }
        .sidebar_header h3{
          display: inline-block;
          color: #fff;
          font-size: 3.2rem;
          
        }

        .wrap{
            display: flex;
            gap: 0;
           padding: 2rem 0;
        }

        .wrap:nth-child(2){
      
            background-color: rgba(88, 153, 214, 0.267);
        }

        .wrap:hover{
      
      background-color: rgba(88, 153, 214, 0.267);
  }
    .wrap:last-child:hover .side_btn{
      background-color: rgba(88, 153, 214, 0.027);
  }
      
      
        .sidebar_link a{
            display: flex;
            gap: 1rem;
           color: #fff;
           font-size: 2.2rem;
           margin-left: 3rem;
           text-decoration: none;
        }
        .side_btn{
            display: flex;
            gap: 1rem;
            color: #fff;
            font-size: 2.2rem;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: rgb(30, 52, 73);
        }
        .main{
         width: 80%;
         height: 100%;
         background-color: rgba(230, 227, 227, 0.952);
        }
        .main_header{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            height: 9rem;
            margin-bottom: 4rem;
            
        }
        .inside_header{
            position: fixed;
            background-color: #fff;
            height: 9rem;
            width: 80%;
        }
        .header_container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 9rem;
            width: 80%;
            margin: 0 auto;
            cursor: pointer;
        }
        .header_container svg{
            font-size: 1.8rem;
        }
        .header_container a{
            color: #555;
            font-size: 1.8rem;
            text-decoration: none;
        }
        .btn{
            border: none;
            outline: none;
           background-color: #fff;
           font-size: 2rem;
           cursor: pointer;
        }
        .form_area{
            width: 80%;
            height: 80%;
            margin: 0 auto;
            background-color: #fff;
        }
        .title{
            display: flex;
            align-items: center;
            border-bottom: rgba(66, 63, 63, 0.233) solid 2px;
        }
        .title p{
            font-size: 1.8rem;
           
        }
        .title{
            display: flex;
            align-items: center;
            border-bottom: rgba(66, 63, 63, 0.233) solid 2px;
            margin-bottom: 4rem;
        }
        .form_container{
            width: 90%;
            margin: 0 auto;
            
        }
        form{
           display: flex;
           flex-direction: column;
           gap: 3rem;
        }
        .field_wrapper{
            display: flex;
            flex-direction: column;
            gap: 7px;
        }
        label{
            font-size: 2rem;
            color: #444;
        }
        label span{
            color: rgb(218, 12, 64);
        }
        .border{
            border: rgba(68, 68, 68, 0.233) solid 3px;
            outline: none;
            border-radius: 4px;
            font-size: 1.8rem;
            font-family: sans-serif;
        }
        .padding_y{
           padding: 0.7rem 0;
        }
        .save_btn{
            border: none;
            outline: none;
            background-color: rgba(22, 235, 129, 0.973);
            border-radius: 4px;
            color: #fff;
            font-size: 2rem;
            width: 14rem;
            height: 4.7rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
              <div class="sidebar_header">
                   <h3>Blog</h3>
              </div>
              <div class="sidebar_link">
                <div class="wrap">
                    <a href="{{url('/dashboard')}}">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path></svg>
                        </span>
                        Dashboard
                     </a>
                 </div>

                 <div class="wrap">
                    <a href="{{url('/article/add')}}">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"></path></svg>
                        </span>
                       Add Article
                     </a>
                 </div>
 
                 <div class="wrap">
                    <a href="#">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M17 20.41L18.41 19 15 15.59 13.59 17 17 20.41zM7.5 8H11v5.59L5.59 19 7 20.41l6-6V8h3.5L12 3.5 7.5 8z"></path></svg>
                        </span>
                        Catagory
                     </a>
                 </div>
 
                 <div class="wrap">
                    <a href="#">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></svg>
                        </span>
                        Users
                     </a>
                 </div>
 
                 <div class="wrap">
                    <a href="#">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M512 176.001C512 273.203 433.202 352 336 352c-11.22 0-22.19-1.062-32.827-3.069l-24.012 27.014A23.999 23.999 0 0 1 261.223 384H224v40c0 13.255-10.745 24-24 24h-40v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-78.059c0-6.365 2.529-12.47 7.029-16.971l161.802-161.802C163.108 213.814 160 195.271 160 176 160 78.798 238.797.001 335.999 0 433.488-.001 512 78.511 512 176.001zM336 128c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"></path></svg>
                        </span>
                        Change Password
                     </a>
                 </div>
 
                 <div class="wrap">
                    <a href="#">
                        <span>
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                         @csrf
                        
                     <button class="side_btn" type="submit">Logout</button>
                     </form> 
                     </a>
                 </div>

             </div>
       </div>
        <div class="main">
            <div class="main_header">
                <div class="inside_header">
                    <div class="header_container">
                     <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="icon-mobile-nav" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                        
                     <button class="btn" type="submit">Logout</button>
                     </form> 
                     </div>
                 </div>
           </div>
           <div class="form_area ">
               <div class="title">
                   <div class="form_container">
                   <p >Create Article</p>
                  </div>
               </div>

               <div class="form_wrapper form_container">

                <form method="POST" action="{{url('article/add')}}">
                    @csrf
                    <div class="field_wrapper">
                        <label>Title<span>*</span></label>
                        <input class = "border padding_y" name="title" class="title" type="text">
                    </div>

                    <div class="field_wrapper">
                        <label>Full Text</label>
                       <textarea class = "border" name="body" id="" cols="30" rows="10"></textarea>
                       </div>

                    <div class="field_wrapper">
                        <label>Catagory</label>
                        <select class = "border padding_y" name="catagory_id" id="">

                    @foreach ($catagory as $catagory)
                            <option value="{{$catagory->id}}"> {{$catagory->catagory_name}}</option>
                    @endforeach
                        </select>
                       
                    </div>

                    <div class="field_wrapper">
                        <button class = "save_btn">Save</button>
                    </div>
                </form>
            </div>

           </div>
        </div>
    </div>
</body>

</html>


