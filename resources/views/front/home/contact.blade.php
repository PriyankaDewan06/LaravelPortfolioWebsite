<!--Contact-->
<section class="section-eight pt-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="font-weight-bold text-center my-4 font-weight-bold tangerine orange-text" id="getTouch"><span class="green-text">G</span>et In Touch _</h3>
                <!--                    <h6 class="font-weight-bold ">Feel free to contact me</h6>-->
                <div class="row pb-5">
                    <div class="col-md-4">
                        <div class="contact-p">
                            <p class="dancing-script f-s-26">Contact Information :</p>
                            <!--                                <h6 class="mb-2 dancing-script f-s-26">Contact me on social Networks</h6>-->
                            <p class="f-s-17">Phone : <a href="tel:+88001924078763" class="f-s-27 text-light dancing-script">+88001924078763</a></p>
                            <p class="f-s-17">Email : <a href="mailto:priyanka.toma@gmail.com" class="f-s-27 text-light dancing-script">priyanka.toma@gmail.com</a></p>
                            <p class="f-s-17">github: <a href="https://github.com/PriyankaDewan06" class="f-s-27 text-light dancing-script">PriyankaDewan06</a></p>
                            <ul class="nav" style="margin-left: auto">
                                <li><a href="https://www.facebook.com/priyanka.toma.1" title="Facebook" class="nav-link text-light"><i class="fab fa-facebook fa-2x"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/priyanka-das-dewan/" class="nav-link text-light"><i title="Linkedin" class="fab fa-linkedin fa-2x"></i></a></li>
                                <li><a href="https://github.com/PriyankaDewan06" class="nav-link text-light"><i title="Github" class="fab fa-github fa-2x"></i></a></li>
                               
                                <!--                                    <li><a href="" class="nav-link text-light"><i title="Instagram" class="fab fa-instagram fa-2x"></i></a></li>-->
                                <!--                                    <li><a href="" class="nav-link text-light"><i title="" class="far fa-envelope fa-2x"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="dancing-script f-s-26">Or &nbsp;just write me a letter here_</p>
                        <div class="table-bordered">
                            <form action="{{route('contact-msg')}}" method="post">
                                @csrf
                                <div class="row mb-0 mt-3 mx-1">
                                    <div class="col-sm-12">
                                        <!--                                            <label>Your First Name</label>-->
                                        <input type="text" name="name" class="form-control  w-100 border-light " placeholder="Enter your name"/>
                                    </div>
                                </div>
                                <div class="row mb-0 mx-1">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control  border-light mt-3" placeholder="Enter your email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="phone" class="form-control border-light " placeholder="Enter your phone number with country code"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="msg"  cols="30" rows="5" placeholder="Enter your message" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btn" value="Send message" class="btn btn-block btn-success ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pr-5 arrow ml-auto "  id="arrow">
                    <a href="#home" class="btn btn-primary arrow-up"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/Contact-->
