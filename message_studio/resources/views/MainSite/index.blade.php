

        @extends('MainSite.Layouts.app')
     
        
            @section('cover')
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/header_home2.jpg);" alt="header lamps" >
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <div class="display-t">
                                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                        <h1>Dobrodošli v Pallas</h1>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @endsection
        

            @section('content')
            <div id="fh5co-project">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                            <h2 class="h2-animate">Masažni salon Pallas</h2>
                            <p>Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, s katerimi izboljša oziroma olajša stanje vašega psihofizičnega zdravja in vam tako omogoči kvalitetnejše in polnejše življenje.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.gallery')}}"><img src="images/salon.jpg" alt="galerija" class="img-responsive">
                                <h3>Pallas</h3>
                                <span>Galerija</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.about')}}"><img src="images/aboutme.jpg" alt="o meni" class="img-responsive">
                                <h3>O meni</h3>
                                <span>Predstavitev</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.offer')}}"><img src="images/services.jpg" alt="ponudba" class="img-responsive">
                                <h3>Ponudba</h3>
                                <span>Opis storitev</span>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>


            <div id="fh5co-blog" class="fh5co-bg-section">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>Novo v blogu</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="/blog_article/1"><img class="img-responsive" src="images/blog_img1.jpg" alt="masaza"></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="/blog_article/1" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="/blog_article/2"><img class="img-responsive" src="images/blog_img5.jpg" alt="blog"></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="/blog_article/2" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="/blog_article/3"><img class="img-responsive" src="images/blog_img3.jpg" alt="masaza obraza"></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                    
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="/blog_article/3" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
        
       
