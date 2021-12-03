<?php
include "dbConn.php";
class Darbuotojas
{
	public $vardas;
	public $veikla;
	public $aprasymas;
	public $nuotrauka;
	
	public function __construct($vardas_kint, $veikla_kint, $aprasymas_kint, $nuotrauka_kint)
	{
		$this->vardas = $vardas_kint;
		$this->veikla = $veikla_kint;
		$this->aprasymas = $aprasymas_kint;
		$this->nuotrauka = $nuotrauka_kint;
	}
	public function getVardas()
	{
		return "<p>Aš esu " . $this->vardas . "</p>";
	}
	public function getVeikla()
	{
		return $this->veikla;
	}
	public function getAprasymas()
	{
		return "<p>" . $this->aprasymas . "</p>";
	}
	public function getNuotrauka()
	{
		return $this->nuotrauka;
	}
}
$darbuotojas1 = new Darbuotojas("Neda", "Fotografe", "Visuomet turėjau hobį fiksuoti akimirkas, kurti prisiminimus ir dabar jau neįsivaizduoju dienos be
fotografavimo ar nuotraukų retušavimo. Esu pasiruošęs įamžinti ir Jūsų gyvenimo akimirkas
fotografijose. Vestuvės, gimtadieniai ir kitos šventės, mano manymu, neįsivaizduojamos
be fotografo, tad kurkime atsiminimus kartu!", 'IMG/darbuotojas1.jpg');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fotografija</title>
	<meta charset="UTF-8">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->

	<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
	<style>
		.fakeimg {
			height: 200px;
			background: #aaa;
		}
	</style>
</head>

<div class="top">
	<div class="bar red card center-align large ">
		<a href="index.php" class="button rounded-full">Pagrindinis</a>
		<a href="galerija.php" class="button rounded-full">Galerija</a>
		<a href="kainos.php" class="button rounded-full">Kainos</a>
		<a href="apie.php" class="button rounded-full">Apie</a>
		<a href="forma.php" class="button rounded-full">Kontaktai</a>
	</div>
</div>

<body>














	<?php
	$records = mysqli_query($db,"select * from add_worker"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>


	<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0 contMarg">

		<!--Main Col-->
		<div id="profile"
			class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


			<div class="p-4 md:p-12 text-center lg:text-left">
				<!-- Image for mobile view-->
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
					style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>

				<h1 class="text-3xl font-bold pt-8 lg:pt-0"><?php echo $data['fname']; ?> </h1>
				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
				<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg
						class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20">
						<path
							d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
						</svg><?php echo $data['capability']; ?> </p>

				<p class="pt-8 text-sm"><?php echo $data['about']; ?></p>

				<div class="pt-12 pb-8">
					<a class="red text-white font-bold py-2 px-4 rounded-full" href="forma.php">
						Susisiekti
					</a>
				</div>



				<!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

			</div>

		</div>

		<!--Img Col-->
		<div class="w-full lg:w-2/5">
			<!-- Big profile image for side bar (desktop) -->
			<img src="<?php echo $data['image']; ?>" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">

		</div>


		<!-- Pin to top right corner -->
		<div class="absolute top-0 right-0 h-12 w-18 p-4">
			<button class="js-change-theme focus:outline-none">🌙</button>
		</div>

		<?php
}

  ?>






	</div>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link', {
			placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');


		toggle.addEventListener('click', () => {

			if (body.classList.contains('text-gray-900')) {
				toggle.innerHTML = "☀️";
				body.classList.remove('text-gray-900');
				body.classList.add('text-gray-100');
				profile.classList.remove('bg-white');
				profile.classList.add('bg-gray-900');
			} else {
				toggle.innerHTML = "🌙";
				body.classList.remove('text-gray-100');
				body.classList.add('text-gray-900');
				profile.classList.remove('bg-gray-900');
				profile.classList.add('bg-white');

			}
		});
	</script>







	<footer class="center opacity">
		<div class="xlarge">
			<a href="https://www.facebook.com/" target="_blank"><i
					class="fa fa-facebook-official hover-opacity"></i></a>
			<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram hover-opacity"></i></a>
			<a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p hover-opacity"></i></a>
			<a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter hover-opacity"></i></a>
		</div>
		<p>@FotoGrožis</p><br>
	</footer>
	</main>
</body>

</html>