<!doctype html>
<?php
require('connection.php')
?>
<html lang="en">
  <head>
  	<title>Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

    <style>
      a{
        text-decoration: none;
        color:#fff;
      }
      a:link{
        color: #fff;
      }
      a:visited{
        color: #fff;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo"> Book Store</a></h1>
        <ul class="list-unstyled components mb-5">
<?php if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']!='') {
  
  $sql = "select name from register where email = '{$_SESSION['USERNAME']}'";
  $res = mysqli_query($conn,$sql);
  
  $custname = " ";
  while ($x = mysqli_fetch_assoc($res))
  {
  $custname = $x['name'];
  }
?> 
        <li class="">
            <span class="fa fa-login mr-3"></span><?php echo $custname; ?>
          </li>
<?php }?>
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="dash.php"><span class="fa fa-user mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Search Books</a>
          </li>
          <li>
            <a href="sellbooks.php"><span class="fa fa-sticky-note mr-3"></span> Sell Books</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Discussion Forum</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Your chats</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Book Store</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>
          In Dashboard, user can see his favorite books, get notification, login/logout/create account/delete account. User can view books but to chat with the seller he has to login. To sell books, he again is required to login. He can view the discussion forum but to comment, he has to login. We can include about us, contact us, copyright info in footer.
        </p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis assumenda inventore voluptate magnam nesciunt praesentium porro consequuntur quidem? Natus adipisci aut, autem asperiores illum quam ut animi aliquid accusantium id nesciunt recusandae nulla minus nihil rem ipsum quos tempore alias quidem perferendis soluta! Nobis eaque perspiciatis aliquam tempore, architecto dolor laudantium impedit laboriosam. Cumque fuga eveniet, omnis soluta harum dolor delectus aliquam dicta veniam doloribus minima ipsum consequatur nam provident quis quo qui ratione sit molestiae architecto quidem beatae eaque? Blanditiis voluptates sequi autem voluptas nihil velit molestias beatae ab necessitatibus, natus totam cumque quisquam inventore veniam maiores mollitia laboriosam praesentium ratione fugit perspiciatis eius. Rem dolorem, consectetur eaque deserunt hic veniam molestiae placeat unde. Corrupti illo totam ipsa qui consequatur ex molestias sunt temporibus obcaecati hic, eligendi animi! Dolores doloremque atque quaerat delectus, ad animi! Odit labore, iure illo, incidunt quidem reiciendis excepturi tempora voluptatem architecto libero laboriosam aliquam delectus neque praesentium porro molestiae aliquid velit. Dignissimos soluta vero voluptatem assumenda praesentium, molestias delectus repudiandae doloremque hic blanditiis error. Cupiditate, laborum nulla molestiae sapiente dolorum dignissimos aspernatur iusto accusantium voluptatum quo quam excepturi, ex sint ab vitae dolores deleniti veniam! Hic blanditiis eius culpa natus magnam at autem tempore corporis cumque nesciunt asperiores consequatur, illum nulla enim distinctio quidem commodi minima facere? Placeat aut et explicabo perspiciatis dicta numquam rem sequi, vero perferendis quaerat eveniet excepturi provident voluptates distinctio beatae laboriosam earum qui expedita. Voluptas eius numquam maiores illum, officiis est! Quis magnam eveniet sequi fuga veniam repellendus non harum quia blanditiis ad earum tempora ipsam asperiores sed, alias rerum. Expedita obcaecati necessitatibus aspernatur nihil facilis velit quae excepturi, ipsa laboriosam, quia debitis fugiat eos, pariatur est. Voluptate corrupti accusantium cum, perferendis neque obcaecati, excepturi praesentium alias nobis adipisci atque nihil? Sapiente ratione itaque magni possimus quis molestiae quas provident, vero hic quisquam ea, ducimus modi. Et at nobis maxime tenetur quos explicabo laboriosam pariatur eveniet corrupti deserunt, fuga reprehenderit culpa sed assumenda reiciendis eligendi, dolore minus in cupiditate! Deleniti unde culpa vero nostrum? Repudiandae sequi praesentium excepturi aspernatur? Vel iusto, suscipit beatae eos corporis dolorum, voluptates facilis eveniet maiores blanditiis nesciunt totam doloribus iure. Molestiae obcaecati laboriosam nisi consequatur, facilis quidem eveniet dolor cupiditate qui nihil ea odio. Debitis ut maiores eos facilis quisquam fugiat quas odio cum! Assumenda illum tempore atque deleniti minima corporis doloremque! Itaque dignissimos laudantium amet saepe, aperiam et ipsam a aspernatur quis atque ad quos corrupti, libero perspiciatis est esse error consequuntur minus quod doloribus reprehenderit. Quasi dolor perspiciatis sint ad nisi quod consequatur dolore ipsa! Iure itaque fugiat officia! Magnam enim quaerat optio mollitia beatae, facere consequuntur, error natus quos ad ipsum saepe amet, libero quas necessitatibus maiores. Quas officiis sit, cum nihil fuga odio architecto consequatur maiores, saepe error ut magnam voluptatibus hic voluptate voluptas. Sint laborum doloremque, necessitatibus neque adipisci quibusdam deserunt asperiores totam veniam saepe modi excepturi. Harum illo quibusdam animi, voluptatibus id nostrum autem, sequi officiis quaerat temporibus nisi quia! Beatae magni impedit quasi placeat, architecto facilis ea aliquam, unde eius pariatur voluptate debitis quidem quis quae quas cum minima sit? Magni nemo harum suscipit asperiores distinctio, quo ea quod fugiat! Alias sit sapiente eius hic doloribus laboriosam a explicabo unde molestiae rem est, omnis commodi harum et quaerat consectetur fugiat. Ipsam architecto voluptatum laudantium vero impedit quam fugit, enim quod mollitia in, quos alias ipsum nulla reiciendis? Est exercitationem corrupti fugit fugiat explicabo nihil, rem cupiditate mollitia unde in dolores magnam modi debitis reprehenderit aperiam, quas, eligendi dolore voluptatibus officia? Consequuntur blanditiis, quasi pariatur tempora natus amet necessitatibus porro officiis? Expedita amet aliquam iusto illo nostrum deserunt eum ad optio a cupiditate debitis recusandae consequatur alias officia facilis obcaecati dolorem omnis laudantium, cumque ut beatae placeat! Ducimus sed repellat quaerat rerum voluptate odit amet reiciendis possimus illum, itaque blanditiis aliquid dignissimos cum non quo porro esse impedit quibusdam vitae ex soluta hic. Ducimus amet facilis, soluta doloremque et ea culpa tempore, aliquam accusantium iure reiciendis! Omnis repellat architecto nam cumque officia blanditiis minima ea, quod expedita natus nisi placeat ipsa veniam, quos minus possimus atque? Impedit qui officiis animi veniam voluptates. Saepe laudantium laboriosam atque quos, excepturi corporis assumenda in quo sed, ad omnis? Incidunt repellat reprehenderit fugit, eos corporis perspiciatis illo recusandae aliquam modi adipisci? Amet aut distinctio dolore, nulla qui delectus cumque aliquid, doloribus placeat ullam rerum, fuga laborum ducimus ab numquam. Eligendi soluta eveniet esse libero tempore possimus architecto sed fugiat, voluptates delectus ab cum ducimus inventore adipisci placeat minus iste deserunt, sint atque. Explicabo, quisquam! Ex suscipit a doloremque nobis culpa, eos esse inventore, illum voluptas ipsum omnis corrupti, nam voluptatum quas obcaecati vero incidunt ullam animi perferendis distinctio harum minima est? Doloremque, laboriosam? Officia illo dolorem quas, nam harum adipisci vel quos nulla sit distinctio, tempore magni animi, sint quasi voluptates praesentium assumenda veritatis. Mollitia, quo laudantium! Quas, quis aliquid, praesentium dolorum ab eligendi aliquam asperiores placeat dolor ipsam veritatis nobis. Placeat aperiam atque culpa temporibus amet accusamus quo voluptas libero exercitationem mollitia ipsum, autem asperiores iusto sunt quibusdam. Odit illum quas dignissimos saepe quis provident cum doloremque, dolores enim dolore perferendis aperiam ducimus maxime? Laudantium tenetur ipsam dolore accusantium voluptatem nostrum odit necessitatibus fuga voluptate quos saepe ullam iste, sed eum aspernatur hic nemo pariatur eius quidem consequatur alias vero ducimus. Fuga, laborum iusto, unde praesentium, provident quidem ullam exercitationem quaerat perspiciatis corporis odit eum dolor deleniti? Assumenda dolore ad in, ut aliquam dicta itaque repudiandae aspernatur id et alias sapiente quidem quia magnam unde quod optio officia quas perferendis cumque asperiores minima perspiciatis necessitatibus aut. Aut minima mollitia quisquam, est praesentium laudantium totam illo ut nam quasi molestiae enim maiores, cumque doloribus beatae magni reprehenderit earum inventore sit doloremque? Impedit maxime necessitatibus ipsum possimus quam amet vitae blanditiis aliquam suscipit quaerat dolores, debitis harum qui sed aperiam cupiditate facilis? Harum dolorem vero quidem maxime ipsum deleniti distinctio nihil, error maiores fugit aliquam fuga. Consequatur nobis, rem error fuga quisquam saepe cupiditate odio ipsam, eius laudantium assumenda modi rerum fugiat excepturi?
          
        </p>

      </div>

		</div>
   
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <a href="">About Us</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="">Contact Us</a>
     
     
      
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <script>document.write(new Date().getFullYear())</script> Copyright: Book Store
      </div>
      <!-- Copyright -->
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>