<!--
<div class="text-center">
    <h2>Light a lamp or send a message for Martyr </h2>
</div>
-->
<div class="head-reg text-center">
    <h2>LIGHT A LAMP OR SEND A MESSAGE FOR MARTYR FAMILY</h2>
</div>
<?php $cats1=$category->children[0]->children; $cats2=$category->children[1]->children; //print_r($cats2); ?>
<div class="home-img">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="ministri text-center">
                            <div class="section1">
                                <i class="show">ministry of Defence</i>
                                <!--
                            <span class="tobedone">
                                   
                      <ul class="cssMenu">
	<?php foreach($cats2 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub->name;?></a>
				
            <ul class="megamenu">
            <?php 
            $subcategory1=$subcategory->children;
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><?php echo $sub1->name;?></li>
			 <?php } ?>
			</ul>
			
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>
    
                                </span>
-->

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="ministri text-center">
                            <div class=" menu">
                                <i class="show img-po">ministry of home central</i>

                                <!--
                            <span class="tobedone done pull-right">
                                   
                      <ul class="cssMenu cssMenu2">
                      
	<?php foreach($cats1 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li ><a href="regiments.html"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$subcategory->children;
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="regiments.php"><?php echo $sub1->name;?></a></li>
			 <?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
                                </span>
-->

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ministri text-center">
                            <div class=" menu">
                                <i class="show img-po">ministry of home state</i>
                                <!--

                            <span class="tobedone done pull-right">
                                   
                      <ul class="cssMenu cssMenu2">
                      
	<?php foreach($cats1 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li ><a href="regiments.html"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$subcategory->children;
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="regiments.php"><?php echo $sub1->name;?></a></li>
			 <?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
                                </span>
-->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">



                <span class="tobedone done">
                                   
                      <ul class="cssMenu cssMenu2">
                      
	<?php foreach($cats1 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li ><a href="regiments.html"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$subcategory->children;
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="regiments.php"><?php echo $sub1->name;?></a></li>
			 <?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
                                </span>



            </div>
        </div>
    </div>
</div>
<!--
<div class="disc">
    <p style="color:black;"> disclaimer :</p>
</div>
-->
<script>
    $(document).ready(function () {

        $(".section1 .show").click(function () {
            //                console.log("ABCD");
            $(".section1 span.tobedone").fadeOut(0);
            $(this).parents(".section1").children("span.tobedone ").fadeIn(0);
        });
    });
</script>