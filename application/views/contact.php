<?php $this->load->view('header');?>
<div class="content">
    <div class="form">
        <h3>Contact form</h3>
        <form method="post" action="#">
            <div>
                <span><label for="name">Name</label></span>
                <span><input type="text" name="name" /></span>
            </div>
            <div>
                <span><label for="email">Email</label></span>
                <span><input type="text" name="email" /></span>
            </div>
            <div>
                <span><label for="subject">Subject</label></span>
                <span><input type="text" name="subject"></span>
            </div>
            <div>
                <span><input class="submit"  name="save" type="submit" value="Submit"/></span>
            </div>
       </form>
    </div>
</div>
<?php $this->load->view('footer');?>
   