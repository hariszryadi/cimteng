@extends('layouts.frontend.master')

@section('content')
<style>
    blockquote {
        font-family: Georgia, serif;
        position: relative;
        margin: 0.5em;
        padding: 0.5em 2em 0.5em 3em;
    }
    /* Thanks: http://callmenick.com/post/styling-blockquotes-with-css-pseudo-classes */
    blockquote:before {
        font-family: Georgia, serif;
        position: absolute;
        font-size: 6em;
        line-height: 1;
        top: 0;
        left: 0;
        content: "\201C";
    }
    blockquote:after {
        font-family: Georgia, serif;
        position: absolute;
    /* display: block; don't use this, it raised the quote too high from the bottom - defeated line-height? */
        float:right;
        font-size:6em;
        line-height: 1;
        right:0;
        bottom:-0.5em;
        content: "\201D";
    }
    blockquote footer {
        padding: 0 2em 0 0;
        text-align:right;
    }
    blockquote cite:before {
        content: "\2013";
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
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
		
        <div style="margin-bottom: 70px;">
            <blockquote>
                Kami memiliki komitmen untuk memberikan layanan terbaik kepada Masyarakat. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran kepada kami untuk ditindaklanjuti agar masalah tidak terulang kembali. 
            <footer>
                <cite>
                    Kecamatan Cimahi Tengah
                </cite>
            </footer>
            </blockquote>
        </div>

		<div class="row">
			<div class="col-md-6">
                <div class="contact-form-box" style="background-color: #fff;">
                    <img class="" src="{{ asset('images/komentar.svg') }}" alt="komentar & saran" style="padding-top: 10px;"/>
                </div>
			</div>
			<div class="col-md-6">
                <div class="contact-form-box">
                    <div class="col-sm-12 mb15">
                        <p style="text-align: center;">Silahkan hubungi kami melalui form di bawah ini. Kritik dan saran Anda sangat penting bagi kami untuk terus meningkatkan kualitas produk dan layanan yang kami untuk Anda..</p>
                    </div>
                    <form id="comment-form">
                        <div class="message col-xs-12">
                            <p class="email-loading"><img src="{{ asset('images/loading.gif') }}" alt="" style="margin: 0 auto;">&nbsp;&nbsp;&nbsp;Sending...</p>
                            <p class="email-success"><i class="icon icon-icon-check-alt2"></i> Pesan anda berhasil terkirim.</p>
                            <p class="email-failed"><i class="icon icon-icon-close-alt2"></i> Terjadi kesalahan!</p>
                        </div>
        
                        <div class="col-sm-12 mb13">
                            <input name="name" class="contact-name" id="contact-name" type="text" placeholder="Nama anda" required="" autocomplete="off"/>
                        </div>
                        <div class="col-sm-6 mb13">
                            <input name="email" class="contact-email" id="contact-email" type="email" placeholder="Email anda" required="" autocomplete="off"/>
                        </div>
                        <div class="col-sm-6 mb13">
                            <input name="subject" class="contact-subject" id="contact-subject" type="text" placeholder="Subjek" required="" autocomplete="off"/>
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
