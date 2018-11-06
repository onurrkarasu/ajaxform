
$(function(){

	//Veriler Sayfa Yüklendiği Gibi Çekiliyor
	$("#listele").load("veriler.php");

	$("#yeni-ekle").click(function(){


		$("#listele").fadeOut(500);
		$("#kayit-ekle").fadeIn(2000);


	});


	$("#duzenleme-islemi").click(function(){


		$("#listele").fadeOut(500);
		$("#kayit-duzenle").fadeIn(2000);


	});

	$("#gonder").click(function(){


		if ($("#ad_ekle").val()=="" || $("#soyad_ekle").val()=="" ) {


			$("#bos-alan").fadeIn(1000);

			event.preventDefault();





		} else {			
			
			$.ajax({



				
				type:"post",
				url:"islem.php",
				data:$("#jquery-ekle").serialize(),
				
				success:function(cevap) {

					
					$("#basari-islem").fadeIn(1000).text(cevap).delay(3000).fadeOut(1000);
					$("#listele").load("veriler.php");

					$("#ad_ekle").val("");
					$("#soyad_ekle").val("");

				}

			})
			



		}


	});


	$("#geridon").click(function(){

		$("#kayit-ekle").hide();
		$("#listele").fadeIn(1000);
		


	});



	$("body").on("click",".sils",function(){

		var bilgi_id=$(this).attr("id");

		var parent=$(this).parent("td").parent("tr");

		//alert(bilgi_id);

		if (confirm('Silinecek ID='+bilgi_id)) {


			$.ajax({

				type:"get",
				url:"islem.php?islem=sil",
				data:{'bilgi_id':bilgi_id},
				success:function(silcevap){

					//$("#listele").load("veriler.php");

					parent.fadeOut('slow');

				}


			})



		}

	});



	$("body").on("click",".duzenles",function(){

		var bilgi_id=$(this).attr("id");

		//alert(bilgi_id);


		$("#listele").hide();
		$("#kayit-duzenle").fadeIn(1000);

		$.ajax({

			type:"post",
			url:"duzenle.php",
			data:{'bilgi_id':bilgi_id},
			success:function(duzenlecevap){


				//$("#ad_duzenle").val(duzenlecevap);


				var obj=JSON.parse(duzenlecevap);

				$("#ad_duzenle").val(obj.bilgi_ad);
				$("#soyad_duzenle").val(obj.bilgi_soyad);
				$("#bilgi_id").val(bilgi_id);


			}
		})



	});


	//Guncelleme İşlemi


		$("#guncelle").click(function(){
		
			
			$.ajax({


				type:"post",
				url:"islem.php",
				data:$("#jquery-duzenle").serialize(),
				
				success:function(cevapd) {

					
					$("#basari-islem-duzenle").fadeIn(1000).text(cevapd).delay(3000).fadeOut(1000);
					$("#listele").load("veriler.php");

					
				}

			})
			



		


	});


$("#geridonduzenle").click(function(){

		$("#kayit-duzenle").hide();
		$("#listele").fadeIn(1000);
		


	});


});