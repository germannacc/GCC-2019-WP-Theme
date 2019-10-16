<?php
/**
* The sidebar for pages that pulls navigation and widgets for each parent and child pages.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<aside class="small-12 medium-12 large-3 columns page-nav hide-for-print" id="section-menu" data-toggler="hide">
  <?php //get page widgets
 
  //alerts
  if ( is_page('50') || $post->post_parent == '50' ) {
  //custom department widgets
  // dynamic_sidebar( 'sidebar-widgets' );
  }
  //admissions
  if ( is_page('24') || $post->post_parent == '24' || is_page('11434') || is_page('14104') ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=24'); 
  // dynamic_sidebar( 'admissions-widgets' );
  }
  //international admissions
  if ( is_page('56') ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=56'); 
  // dynamic_sidebar( 'international-students-widgets' );
  }
  //academic center for excellence sidebar
  if ( is_page('108') || $post->post_parent == '108' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=108', 'exclude='); 
  //dynamic_sidebar( 'tutoring-services-widgets' );
  }
  //about germanna
  if ( is_page('25') || $post->post_parent == '25' || $post->post_parent == '1222' || $post->post_parent == '1223' || $post->post_parent == '1228' || $post->post_parent == '1224' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=25'); 
  // dynamic_sidebar( 'about-widgets' );

  }
  //academics
  if ( is_page('5761') || $post->post_parent == '5761') {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=5761'); 
  // dynamic_sidebar( 'academic-widgets' );
  }
  if ( is_page('26') || $post->post_parent == '26') {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=26'); 
  // dynamic_sidebar( 'academic-widgets' );
  }
  //acc
  if ( is_page('27') || $post->post_parent == '27' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=27'); 
  // dynamic_sidebar( 'acc-widgets' );
  }
  //advising
  if ( is_page('9124') || $post->post_parent == '9124' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=9124'); 
  // dynamic_sidebar( 'advising-widgets' );
  }
  //alumni
  if ( is_page('20401') || $post->post_parent == '20401' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=20401'); 
  // dynamic_sidebar( 'alumni-widgets' );
  }
  //post pages
  if ( is_singular('post'))  {
  //custom archive widgets
  // dynamic_sidebar( 'single-widgets' );
  }
  if ( is_archive('safety-alerts'))  {
  //custom archive widgets
  // dynamic_sidebar( 'single-widgets' );
  }
  //awards
  if (is_page('35') || $post->post_parent == '35')
  {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=35'); 
  // dynamic_sidebar( 'awards-widgets' );
  }
  //arts and sciences
  if ( is_page('34') || $post->post_parent == '34') {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=34'); 
  // dynamic_sidebar( 'arts-sciences-widgets' );
  }
  //bookstore
  if ( is_page('26193') || $post->post_parent == '26193' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=26193'); 
  // dynamic_sidebar( 'cae-widgets' );
  }
  //CAE
  if ( is_page('36') || $post->post_parent == '36' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=36'); 
  // dynamic_sidebar( 'bookstore-widgets' );
  }
  //business office
  if ( is_page('37') || $post->post_parent == '37' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=37'); 
  // dynamic_sidebar( 'business-office-widgets' );
  }
  //career services
  if ( is_page('177') || $post->post_parent == '177' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=177'); 
  // dynamic_sidebar( 'career-services-widgets' );
  }
  //career transfer
  if ( is_page('6954') || $post->post_parent == '6954' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=6954'); 
  // dynamic_sidebar( 'career-transfer-widgets' );
  }
  //catalog
  if ( is_page('11035') || $post->post_parent == '11035' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=11035'); 
  // dynamic_sidebar( 'catalog-widgets' );
  }
  //college board
  if ( is_page('1324') || $post->post_parent == '1324' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=1324'); 
  // dynamic_sidebar( 'college-board-widgets' );
  }
  //college police
  if ( is_page('42') || $post->post_parent == '42' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=42'); 
  // dynamic_sidebar( 'college-police-widgets' );
  }
  //contact
  if ( is_page('18651') || $post->post_parent == '18651' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=18651'); 
  // dynamic_sidebar( 'contact-widgets' );
  }
  //counseling
  if ( is_page('44') || $post->post_parent == '44' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=44'); 
  // dynamic_sidebar( 'counseling-widgets' );
  }
  ///dental
  if ( is_page('114') || $post->post_parent == '114' )  {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=114'); 
  // dynamic_sidebar( 'dental-widgets' );
  }
  //disability services
  if ( is_page('47') || $post->post_parent == '47' )
  {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=47'); 
  // dynamic_sidebar( 'disability-services-widgets' );
  }
  //distance learning
  if ( is_page('48') || $post->post_parent == '48' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=48'); 
  // dynamic_sidebar( 'distance-learning-widgets' );
  }
  //diversity
  if ( is_page('12255') || $post->post_parent == '12255' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=12255'); 
  // dynamic_sidebar( 'diversity-widgets' );
  }
  //dual enrollment
  if ( is_page('49') || $post->post_parent == '49' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=49');   
  // dynamic_sidebar( 'dual-enrollment-widgets' );
  }
  //educational foundation
  if ( is_page('52') || $post->post_parent == '52' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=52'); 
  dynamic_sidebar( 'edfoundation-widgets' );
  }
  if ( is_page('25329')) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=25329'); 
  // dynamic_sidebar( 'edfoundation-widgets' );
  }
  if ( is_page('26722')) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=26722'); 
  // dynamic_sidebar( 'edfoundation-widgets' );
  }
  //facilities
  if ( is_page('57') || $post->post_parent == '57' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=57'); 
  // dynamic_sidebar( 'facilities-widgets' );
  }
  //faculty and staff
  if ( is_page('58') || $post->post_parent == '58' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=58'); 
  // dynamic_sidebar( 'faculty-widgets' );
  }
  //financial aid
  if ( is_page('59') || $post->post_parent == '59' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=59'); 
  // dynamic_sidebar( 'financial-aid-widgets' );
  }
  //gainful employment
  if ( is_page('60') || $post->post_parent == '60' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=60'); 
  // dynamic_sidebar( 'gainful-employment-widgets' );
  }
  //ged testing
  if ( is_page('62') || $post->post_parent == '62' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=62'); 
  // dynamic_sidebar( 'testing-services-widgets' );
  }
  //germanna ready
  if ( is_page('134') || $post->post_parent == '134' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=134'); 
  // dynamic_sidebar( 'germanna-ready-widgets' );
  }
  //gpta
  if ( is_page('64') || $post->post_parent == '64' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=64'); 
  // dynamic_sidebar( 'gladys-todd-widgets' );
  }
  //graduation
  if ( is_page('66') || $post->post_parent == '66' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=66'); 
  // dynamic_sidebar( 'graduation-widgets' );
  }
  //grants
  if ( is_page('9148') || $post->post_parent == '9148' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=9148'); 
  // dynamic_sidebar( 'grants-widgets' );
  }
  //great expectations
  if ( is_page('67') || $post->post_parent == '67' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=67'); 
  // dynamic_sidebar( 'great-expectations-widgets' );
  }
  //helpdesk
  if ( is_page('69') || $post->post_parent == '69' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=69'); 
  // dynamic_sidebar( 'helpdesk-widgets' );
  }
  //human resources
  if ( is_page('75') || $post->post_parent == '75' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=75'); 
  // dynamic_sidebar( 'human-resources-widgets' );
  }
  //highlights
  //institutional advancement
  if ( is_page('93') || $post->post_parent == '93' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=93'); 
  // dynamic_sidebar( 'ie-widgets' );
  }
  //inauguration
  if ( is_page('24232') || $post->post_parent == '24232' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=24232'); 
  // dynamic_sidebar( 'inauguration-widgets' );
  }
  //internships
  if ( is_page('7134') || $post->post_parent == '7134' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=7134'); 
  // dynamic_sidebar( 'internship-widgets' );
  }
  //international education
  if ( is_page('25522') || $post->post_parent == '25522' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=25522'); 
  // dynamic_sidebar( 'international-education-widgets' );
  }
  //legal (statements & policies)
  if ( is_page('12778') || $post->post_parent == '12778' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=12778'); 
  // dynamic_sidebar( 'statements-widgets' );
  }
  //locations
  if ( is_page('1221') || $post->post_parent == '1221' || $post->post_parent == '1222' || $post->post_parent == '1223' || $post->post_parent == '1228' || $post->post_parent == '1224'   ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=1221'); 
  // dynamic_sidebar( 'location-widgets' );
  }
  //marketing
  if ( is_page('79') || $post->post_parent == '79' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=79'); 
  // dynamic_sidebar( 'marketing-widgets' );
  }
  //navigate
  if ( is_page('27449') || $post->post_parent == '27449' ){
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=27449'); 
  // dynamic_sidebar( 'navigate-widgets' );
  }
  if ( is_page('85') || $post->post_parent == '85' ){
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=85'); 
  // dynamic_sidebar( 'nursing-health-widgets' );
  }
  if ( is_page('84') || $post->post_parent == '84' ){
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=84'); 
  // dynamic_sidebar( 'nursing-widgets' );
  }
  //orientation
  if ( is_page('88') || $post->post_parent == '88' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=88'); 
  // dynamic_sidebar( 'orientation-widgets' );
  }
  //pathways
  if ( is_page('20591') || $post->post_parent == '20591' ) {
  //custom department widgets
      $exclude_ids = get_field( 'exlude_id' );
  echo gcc_wp_2018_list_child_pages(

    $defaults = array(
        
        'child_of' => '20591',
        'exclude'      => 'echo $exclude_ids'));

  // dynamic_sidebar( 'pathways-widgets' );
  }
  //paying for college
  if ( is_page('89') || $post->post_parent == '89' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=89'); 
  //dynamic_sidebar( 'payingforcollege-widgets' );
  }
  //pta
  if ( is_page('92') || $post->post_parent == '92' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=92'); 
  // dynamic_sidebar( 'physical-therapist-widgets' );
  }
  //presidents office
  if ( is_page('94') || $post->post_parent == '94' || is_page('27219') ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=94'); 
  // dynamic_sidebar( 'presidents-office-widgets' );
  }
  //printing
  if ( is_page('96') || $post->post_parent == '96' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=96'); 
  // dynamic_sidebar( 'printing-widgets' );
  }
  //professional and technical
  if ( is_page('97') || $post->post_parent == '97' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=97'); 
  // dynamic_sidebar( 'professional-technical-widgets' );
  }
  //publications
  if ( is_page('99') || $post->post_parent == '99' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=99'); 
  // dynamic_sidebar( 'publications-widgets' );
  }
  //scholars program
  if ( is_page('103') || $post->post_parent == '103' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=103'); 
  // dynamic_sidebar( 'scholars-widgets' );
  }
  //services and support
  if ( is_page('21833') || $post->post_parent == '21833' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=21833'); 
  // dynamic_sidebar( 'services-support-widgets' );
  }
  //student activities
  if ( is_page('104') || $post->post_parent == '104' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=104'); 
  // dynamic_sidebar( 'student-activities-widgets' );
  }
  //student development
  if ( is_page('14001') || $post->post_parent == '14001' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=14001'); 
  // dynamic_sidebar( 'student-development-widgets' );
  }
  //students
  if ( is_page('20') || $post->post_parent == '20' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=20'); 
  // dynamic_sidebar( 'students-widgets' );
  }
  //student handbook
  if ( is_page('11046') || $post->post_parent == '11046' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=11046'); 
  // dynamic_sidebar( 'student-handbook-widgets' );
  }
  //technical Services
  if ( is_page('106') || $post->post_parent == '106' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=106'); 
  // dynamic_sidebar( 'technical-services-widgets' );
  }
  //testing
  if ( is_page('107') || $post->post_parent == '107' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=107'); 
  // dynamic_sidebar( 'testing-services-widgets' );
  }
  //transfer
  if ( is_page('7059') || $post->post_parent == '7059' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=7059'); 
  // dynamic_sidebar( 'transfer-services-widgets' );
  }
  //veterans
  if ( is_page('110') || $post->post_parent == '110' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=110'); 
  // dynamic_sidebar( 'veterans-widgets' );
  }
  //workforce
  if ( is_page('113') || $post->post_parent == '113' ) {
  //custom department widgets
  echo gcc_wp_2018_list_child_pages('child_of=113'); 
  // dynamic_sidebar( 'workforce-widgets' );
  }
  ?>
</aside>