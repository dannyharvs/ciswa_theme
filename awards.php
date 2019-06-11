<?php
    /*
    Template Name: awards

    */
    ?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>


<div class="container fluid text-center">
  <h1>Awards</h1> 

</div>

<div class="aboutawards container-fluid text-center">
  
    <div class=aboutawards>
    
      <h4>The CISWA Awards were established in 2014 to acknowledge the achievements of individuals and organisations in promoting and supporting international education in Western Australia. Now in its 5th year the 2019 CISWA awards have expanded to include:</h4>
      <p>International VET Student of the Year</p>
<p>International Tertiary Student of the Year</p>
<p>International Education Program of the Year</p>
<p> Outstanding Individual Contribution to International Education</p>
     
    </div>
  
</div>



<div class="nominateawards" class="container-fluid text-center">
  <h2 class="text-center">Nominate</h2>

<!-- Container (awards Section) -->
   
  </div>
  <div class="nominations">
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>International VET Student of the Year</h2>
        </div>
        <div class="panel-body">
          <p>About recognising the significant contribution that international VET students make to the Western Australian community. CISWA seeks to acknowledge an international student, who has demonstrated academic excellence and has contributed to enhancing the student experience both on and off campus. </p>
        </div>
        <div class="panel-footer">
        
         <a class="btn btn-default" href=#><?php the_field('registernow'); ?> Nominate</a>
        </div>
      </div>      
    </div>  
      <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>International Tertiary Student of the Year</h2>
        </div>
        <div class="panel-body">
          <p>About recognising the significant contribution that international tertiary students make to the Western Australian community. CISWA seeks to acknowledge an international student, who has demonstrated academic excellence and has contributed to enhancing the student experience both on and off campus.</p>
        </div>
        <div class="panel-footer">
        
         <a class="btn btn-default" href=#><?php the_field('registernow'); ?> Nominate</a>
        </div>
      </div>      
    </div> 
      <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>International Education Program of the Year</h2>
        </div>
        <div class="panel-body">
          <p>recognises the work of an individual or team in a Western Australian education institution that has contributed to the welfare or support of international students. For example, communication support programs, pathways initiative, or social inclusion activities.</p>
        </div>
        <div class="panel-footer">
        
         <a class="btn btn-default" href=#><?php the_field('registernow'); ?> Nominate</a>
        </div>
      </div>      
    </div> 
      <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Individual Contribution to International Education</h2>
        </div>
        <div class="panel-body">
          <p>recognises an individual who has made a significant contribution to the enhancement of international education in the State. The achievements will have improved the experience of international students and/or the development of the sector in WA.</p>
        </div>
        <div class="panel-footer">
        
         <a class="btn btn-default" href=#><?php the_field('registernow'); ?> Nominate</a>
        </div>
      </div>      
    </div> 
    
</div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>