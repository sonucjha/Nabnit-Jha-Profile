<section class="section about-me" data-section="section1">
    <div class="container">
        <div class="section-heading">
            <h2>About Me</h2>
            <div class="line-dec"></div>
            <span>
                This is a Bootstrap v4.2.1 CSS Template for you. Edit and use
                this layout for your site. Updated on 21 May 2019 for repeated main menu HTML code.
            </span>
        </div>
        <div class="left-image-post">
            <div class="row">
                <div class="col-md-6 about_me">
                    <div class="left-image">
                        <img src="{{asset('css/assets/images/betu.jpg')}}" alt="Profile Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-6 par_about_me">
                    <div class="right-text">
                        <ul class="mb-5 mb-lg-0 profile-list list-unstyled cs_about">
                            <li><strong>Full Name:</strong> <span class="info-text">Nabnit Chandra Jha</span></li>
                            <li><strong>Higher Education:</strong> <span class="info-text"><a href="https://company.co" target="_blank">MCA</a></span></li>
                            <li><strong>Total Experience:</strong> <span class="info-text"><a href="mailto:hello@company.co">sonucjha@gmail.com</a></span></li>
                            <li><strong>Expected Salary:</strong> <span class="info-text">Talk Later</span></li>
                            <li><strong>Skills:</strong> <span class="info-text">Laravel , VUE , SQL</span></li>
                            {{-- <li><strong>Date of Birth:</strong> <span class="info-text">26 September 1999</span></li> --}}

                        </ul>
                       
                    </div>
                    <div class="mt-lg-0 mt-3 mb-4 mb-lg-0">
                        <a href="#" class="custom-btn btn-stylish">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .btn-stylish {
    display: inline-block;
    background: linear-gradient(45deg, #891a6d, #007bff);
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    border: none;
    border-radius: 30px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-stylish:hover {
    background: linear-gradient(45deg, #14e77e, #0056b3);
    color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);
    transform: scale(1.05);
}

/* Styling the profile list */
.profile-list li {
    margin-bottom: 15px;
    font-size: 16px;
    line-height: 1.8;
}

.profile-list strong {
    color: #333;
    font-weight: 700;
}

.info-text {
    color: #14e77e;
    font-weight: 500;
    margin-left: 5px;
}

.info-text a {
    color: #14e77e;
    text-decoration: none;
    border-bottom: 1px dashed transparent;
    transition: all 0.3s ease;
}

.info-text a:hover {
    color: #14e77e;
    border-bottom: 1px dashed #14e77e;
}

.cs_about{
    display: flex!important;
    flex-direction: column!important;
}
 
.par_about_me{
    display: flex!important;
    flex-direction: column!important;
    /* justify-content:space-between!important; */
}
.cs_about strong{
    color: white;
}
</style>
