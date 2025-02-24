<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/fa.png">
    <title>Pakistan Citizen's Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
     
    <style>
        *{
  margin: 0px;
  padding: 0px;
  font-family: poppins;
  box-sizing: border-box;
}
a{
  text-decoration: none;
}
#testimonials{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width:100%;
}
.testimonial-heading{
  letter-spacing: 1px;
  margin: 30px 0px;
  padding: 10px 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.testimonial-heading span{
  font-size: 1.3rem;
  color: #252525;
  margin-bottom: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.testimonial-box-container{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  width:100%;
}
.testimonial-box{
  width:500px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
  background-image: linear-gradient(green, powderblue);
  padding: 20px;
  margin: 15px;
  cursor: pointer;
}
.profile-img{
  width:50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}
.profile-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.profile{
  display: flex;
  align-items: center;
}
.name-user{
  display: flex;
  flex-direction: column;
}
.name-user strong{
  color: #3d3d3d;
  font-size: 1.1rem;
  letter-spacing: 0.5px;
}
.name-user span{
  color: #979797;
  font-size: 0.8rem;
}
.reviews{
  color: #f9d71c;
}
.box-top{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.client-comment p{
  font-size: 0.9rem;
  color: #4b4b4b;
}
.testimonial-box:hover{
  transform: translateY(-10px);
  transition: all ease 0.3s;
}

@media(max-width:1060px){
  .testimonial-box{
      width:45%;
      padding: 10px;
  }
}
@media(max-width:790px){
  .testimonial-box{
      width:100%;
  }
  .testimonial-heading h1{
      font-size: 1.4rem;
  }
}
@media(max-width:340px){
  .box-top{
      flex-wrap: wrap;
      margin-bottom: 10px;
  }
  .reviews{
      margin-top: 10px;
       
  }
}
::selection{
  color: #ffffff;
  background-color: #252525;
}
    </style>
</head>
  <body><section id="testimonials">
    <div class="testimonial-heading">
        <span>Comments</span>
        <h4>Clients Says</h4>
    </div>
    <div class="testimonial-box-container">
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <div class="name-user">
                        <strong>Liam mendes</strong>
                        <span>@liammendes</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Business Owner (4.5 stars): "Erbsite's cost-tracking features are fantastic! They've helped us stay on budget for several projects. Overall, it's a valuable tool, but I'd like to see more reporting options in the future</p>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <div class="name-user">
                        <strong>Noah Wood</strong>
                        <span>@noahwood</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Business Owner (4.5 stars): "Erbsite's cost-tracking features are fantastic! They've helped us stay on budget for several projects. Overall, it's a valuable tool, but I'd like to see more reporting options in the future</p>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <div class="name-user">
                        <strong>Noah Wood</strong>
                        <span>@noahwood</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Business Owner (4.5 stars): "Erbsite's cost-tracking features are fantastic! They've helped us stay on budget for several projects. Overall, it's a valuable tool, but I'd like to see more reporting options in the future</p>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <div class="name-user">
                        <strong>Noah Wood</strong>
                        <span>@noahwood</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>interface is user-friendly, and I love the drag-and-drop functionality for tasks. However, sometimes notifications can be overwhelming. Maybe an option to customize them would be helpful.</p>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>



                    
                    <div class="name-user">
                        <strong>Oliver Queen</strong>
                        <span>@oliverqueen</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>I've been using the PM Portal for a few months now, and it has completely transformed the way our team manages projects. The interface is user-friendly, and the features are exactly what we need to stay organized and on track. The ability to integrate with other tools we use daily is a huge plus. Highly recommend!</p>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                    </div>
                    <div class="name-user">
                        <strong>Barry Allen</strong>
                        <span>@barryallen</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>"The PM Portal is a game-changer for our project management needs. It simplifies task assignments, tracks progress efficiently, and the reporting features are top-notch. There were a few minor bugs when we first started using it, but the support team was quick to address them</p>
            </div>
        </div>
    </div>
  </section>
  <script src='https://kit.fontawesome.com/c8e4d183c2.js'></script>
  </body>
</html>