@extends('layouts.frontend.master')

@section('content')
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>KOMENTAR & SARAN</h3>
			</div>
			<div class="col-sm-6">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li>Komentar & Saran</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- Visi Misi Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>KOMENTAR & SARAN</h2>
					<p>Komentar dan saran seputar Pelayanan Kecamatan Cimahi Tengah. </p>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 18px;">
                <div class="contact-form-box" style="background-color: #fff;">
                    <p>Kami memiliki komitmen untuk memberikan layanan terbaik kepada Masyarakat. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran kepada kami untuk ditindaklanjuti agar masalah tidak terulang kembali. </p>
                    <img class="" src="{{ asset('images/komentar.svg') }}" alt="komentar & saran" style="padding-top: 10px;"/>
                </div>
			</div>
			<div class="col-md-6" style="padding-bottom: 18px;">
				<div class="contact-form-box">
                    <div class="col-sm-12 mb15">
                        <p>Silahkan hubungi kami melalui form di bawah ini. Kritik dan saran Anda sangat penting bagi kami untuk terus meningkatkan kualitas produk dan layanan yang kami untuk Anda..</p>
                    </div>
                    <form id="comment-form">
                        <div class="message col-xs-12">
                            <p class="email-loading"><img src="{{ asset('images/loading.gif') }}" alt="" style="margin: 0 auto;">&nbsp;&nbsp;&nbsp;Sending...</p>
                            <p class="email-success"><i class="icon icon-icon-check-alt2"></i> Pesan anda berhasil terkirim.</p>
                            <p class="email-failed"><i class="icon icon-icon-close-alt2"></i> Terjadi kesalahan!</p>
                        </div>

                        <div class="col-sm-12 mb13">
                            <input name="name" class="contact-name" id="contact-name" type="text" placeholder="Nama anda" required="" />
                        </div>
                        <div class="col-sm-12 mb13">
                            <input name="email" class="contact-email" id="contact-email" type="email" placeholder="Email anda" required="" />
                        </div>
                        <div class="col-sm-12 mb13">
                            <input name="subject" class="contact-subject" id="contact-subject" type="text" placeholder="Subjek" required="" />
                        </div>
                        <div class="col-sm-12 mb30">
                            <textarea name="comment" class="contact-message" id="contact-message" placeholder="Pesan anda" required=""></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button class="waves-effect btn waves-light btn-fill btn-small">Kirim</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</section>
<!-- Visi Misi End -->
@endsection

@section('scripts')
    <script>
        $('#comment-form').on('submit', function(e) {
            e.preventDefault();
			var success = $(this).find('.email-success'),
				failed = $(this).find('.email-failed'),
				loader = $(this).find('.email-loading');

            $.ajax({
                url: '{{ route('post.comment') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                },
                data: $('#comment-form').serialize(),
                beforeSend: function() {
                    loader.fadeIn(1000);
                },
                success: function () {
                    loader.fadeOut(1000);
                    success.delay(500).fadeIn(1000);
                    failed.fadeOut(500);
                    $('#comment-form').find('.contact-name').val(''),
				    $('#comment-form').find('.contact-email').val(''),
				    $('#comment-form').find('.contact-subject').val(''),
				    $('#comment-form').find('.contact-message').val('')
                },
                error: function () {
                    loader.fadeOut(1000);
                    failed.delay(500).fadeIn(1000);
                    success.fadeOut(500);
                },
                complete: function() {
                    loader.fadeOut(1000);
                }
            })
        })
    </script>
@endsection
