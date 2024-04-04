<?php include_once('./includes/header.php') ?>

<section class="callgirl-banner">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="banner_content">
					<button type="button" class="btn bttn btn-warning mt-4 text-center" data-bs-toggle="modal" data-bs-target="#buttonClickModal">Search Now</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- breadcrubms -->
<div class="container py-2">
	<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>>'; ">
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Call Girls</li>
		</ol>
	</nav>
</div>

<section class="call-girls-listing">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php for ($i = 0; $i < 6; $i++) { ?>
					<div class="card mb-3">
						<div class="row g-0">
							<div class="col-md-4 col-lg-3 col-xl-2">
								<a href="./call-girls-details.php">
									<img src="https://in.masticlubs.com/uploads/model_image/251292/thumbnail/93434x.jpg" class="img-fluid rounded-start w-100 h-100 object-fit-cover" alt="Cash On Delivery Noida College Girls Student And Auntie In Aerocity">
								</a>
							</div>
							<div class="col-md-8 col-lg-9 col-xl-10">
								<div class="card-body">
									<h5 class="card-title">
										<a href="./call-girls-details.php">Cash On Delivery Noida College Girls Student And Auntie In Aerocity</a>
									</h5>
									<p class="card-text mb-2">Noida Whataap Calll <strong>𝟳𝟴𝟯𝟴𝟬 𝟳𝟗𝟴𝟬𝟲</strong> Door Step Delivery Top Quality Female Escorts Service We Offering You % Genuine Completed Body And Mind Relaxation With Happy En</p>
									<p class="card-text"><small class="text-body-secondary">21 Years | Delhi</small></p>
									<div class="d-flex gap-2 justify-content-end contact-icons">
										<a href="#">
											<i class="fa-brands fa-whatsapp"></i>
										</a>
										<a href="#">
											<i class="fa fa-phone"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="col-md-3">
				<div class="sticky-listing sticky-top">
					<ul class="list-callgirl">
						<?php for ($i = 0; $i < 15; $i++) { ?>
							<li>
								<a title="" href="#"> Call Girls in Arunachal Pradesh </a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once('./includes/footer.php') ?>