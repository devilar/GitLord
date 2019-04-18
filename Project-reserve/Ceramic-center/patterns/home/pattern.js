var curHitProd = 0; var numHitProds = 0;
var collageTimeoutID;
var HitProdTimeoutID;
var BradProdTimeoutID;
var collectionTimeoutID;
var collectionStop = false;
var HitProdStop = false;
var BradProdStop = false;


function showHomeCollage() {
	window.clearTimeout(collageTimeoutID);
	var collages = $('.home-collages').children('.home-collage-unit');

	if (collages.length <= 0) return;
	if (curCollage >= collages.length) curCollage = 0;
	if (curCollage == 0) {
		$(collages[collages.length - 1]).fadeOut(300);
	} else {
		$(collages[curCollage - 1]).fadeOut(300);
	}
	$(collages[curCollage]).fadeIn(300, function() { collageTimeoutID = window.setTimeout(showHomeCollage, 5000); });
	var collagesNum = $('.home-collages .home-collage-number').children();
	$('.home-collages .home-collage-number a').removeClass('act');
	$(collagesNum[curCollage]).addClass('act');
	curCollage += 1;
}


function homeCollectionInit() {
	$('.home-collections .arr-left').bind('click', homeCollectionClickLeft);
	$('.home-collections .arr-right').bind('click', homeCollectionClickRight);
	homeCollectionInitArr();

	$('.wrap-slider .arr-left').bind('click', homeCollageClickLeft);
	$('.wrap-slider .arr-right').bind('click', homeCollageClickRight);

}

/**********************/

function homeCollageClickLeft() {
	window.clearTimeout(collageTimeoutID);
	homeCollageSlideLeft();
}


function homeCollageSlideLeft() {

	//console.log("curCollage = "+curCollage + "; Left click");
	var collages = $('.home-collages').children('.home-collage-unit');
	//console.log(collages[curCollage]);


	if (collages.length <= 0) return;

	curCollage -= 1;

	if (curCollage < 0) {
		curCollage = 0;
		return;
	};	
	if (curCollage >= collages.length) {
		curCollage = collages.length-1;
		return;
	}
	if (curCollage < 0) {
		$(collages[collages.length - 1]).fadeOut(300);
	} else {
		$(collages[curCollage+1]).fadeOut(300);
	}

	$(collages[curCollage]).fadeIn(300, function() { collageTimeoutID = window.setTimeout(showHomeCollage, 5000); });
	
	var collagesNum = $('.home-collages .home-collage-number').children();
	
	$('.home-collages .home-collage-number a').removeClass('act');
	$(collagesNum[curCollage]).addClass('act');
	


}


function homeCollageClickRight() {
	window.clearTimeout(collageTimeoutID);
	homeCollageSlideRight();
}
function homeCollageSlideRight() {

	//console.log("curCollage = "+curCollage + "; Right click");
	var collages = $('.home-collages').children('.home-collage-unit');
	//console.log(collages[curCollage]);
	if (collages.length <= 0) return;


	curCollage += 1;

	if (curCollage <= 0) {
		curCollage = 0;
		return;
	};	
	if (curCollage >= collages.length) {
		curCollage = collages.length-1;
		return;
	}


	if (curCollage == 0) {
		$(collages[collages.length - 1]).fadeOut(300);
	} else {
		$(collages[curCollage-1]).fadeOut(300);
	}

	$(collages[curCollage]).fadeIn(300, function() { collageTimeoutID = window.setTimeout(showHomeCollage, 5000); });
	
	var collagesNum = $('.home-collages .home-collage-number').children();
	
	$('.home-collages .home-collage-number a').removeClass('act');
	$(collagesNum[curCollage]).addClass('act');
	


}




/**********************/



function homeCollectionClickLeft() {
	collectionStop = true;
	window.clearTimeout(collectionTimeoutID);
	homeCollectionSlideLeft();
}


function homeCollectionSlideLeft() {
	curCollection -= 1;
	if (curCollection < 0) { curCollection = 0; return; }
	$('.home-collections .container-inner table').animate({'left': '-'+(curCollection*232)+'px'}, 300);
	homeCollectionInitArr();
}


function homeCollectionClickRight() {
	collectionStop = true;
	window.clearTimeout(collectionTimeoutID);
	homeCollectionSlideRight();
}
function homeCollectionSlideRight() {
	curCollection += 1;
	if (curCollection + 5 > numCollections) {
		if (collectionStop) { curCollection -= 1; return; }
		else curCollection = 0;
	}
	$('.home-collections .container-inner table').animate(
		{'left': '-'+(curCollection*232)+'px'},
		300,
		function(){
			if (collectionStop) return;
			collectionTimeoutID = window.setTimeout(homeCollectionSlideRight, 5000);
		}
	);
	homeCollectionInitArr();
}
function homeCollectionInitArr() {
	$('.home-collections .arr-left').removeClass('active');
	$('.home-collections .arr-right').removeClass('active');
	if (curCollection > 0) $('.home-collections .arr-left').addClass('active');
	if (numCollections - 5 - curCollection > 0) $('.home-collections .arr-right').addClass('active');
}





function homeHitProdInit() {
	$('.home-hiprod .arr-left').bind('click', homeHitProdClickLeft);
	$('.home-hiprod .arr-right').bind('click', homeHitProdClickRight);
	homeHitProdInitArr();
}
function homeHitProdClickLeft() {
	HitProdStop = true;
	window.clearTimeout(HitProdTimeoutID);
	homeHitProdSlideLeft();
}
function homeHitProdSlideLeft() {
	curHitProd -= 1;
	if (curHitProd < 0) { curHitProd = 0; return; }
	$('.home-hiprod .container-inner table').animate({'left': '-'+(curHitProd*232)+'px'}, 300);
	homeHitProdInitArr();
}
function homeHitProdClickRight() {
	HitProdStop = true;
	window.clearTimeout(HitProdTimeoutID);
	homeHitProdSlideRight();
}
function homeHitProdSlideRight() {
	curHitProd += 1;
	if (curHitProd + 5 > numHitProds) {
		if (HitProdStop) { curHitProd -= 1; return; }
		else curHitProd = 0;
	}
	$('.home-hiprod .container-inner table').animate(
		{'left': '-'+(curHitProd*232)+'px'},
		300,
		function(){
			if (HitProdStop) return;
			HitProdTimeoutID = window.setTimeout(homeHitProdSlideRight, 5000);
		}
	);
	homeHitProdInitArr();
}
function homeHitProdInitArr() {
	$('.home-hiprod .arr-left').removeClass('active');
	$('.home-hiprod .arr-right').removeClass('active');
	if (curHitProd > 0) $('.home-hiprod .arr-left').addClass('active');
	if (numHitProds - 5 - curHitProd > 0) $('.home-hiprod .arr-right').addClass('active');
}


function homeBradProdInit() {
	$('.home-brand .arr-left').bind('click', homeBradProdClickLeft);
	$('.home-brand .arr-right').bind('click', homeBradProdClickRight);
	homeBradProdInitArr();
}
function homeBradProdClickLeft() {
	BradProdStop = true;
	window.clearTimeout(BradProdTimeoutID);
	homeBradProdSlideLeft();
}
function homeBradProdSlideLeft() {
	curBradProd -= 1;
	if (curBradProd < 0) { curBradProd = 0; return; }
	$('.home-brand .container-inner table').animate({'left': '-'+(curBradProd*182)+'px'}, 300);
	homeBradProdInitArr();
}
function homeBradProdClickRight() {
	BradProdStop = true;
	window.clearTimeout(BradProdTimeoutID);
	homeBradProdSlideRight();
}
function homeBradProdSlideRight() {
	curBradProd += 1;
	if (curBradProd + 5 > numBradProds) {
		if (BradProdStop) { curBradProd -= 1; return; }
		else curBradProd = 0;
	}
	$('.home-brand .container-inner table').animate(
		{'left': '-'+(curBradProd*182)+'px'},
		300,
		function(){
			if (BradProdStop) return;
			BradProdTimeoutID = window.setTimeout(homeBradProdSlideRight, 5000);
		}
	);
	homeBradProdInitArr();
}
function homeBradProdInitArr() {
	$('.home-brand .arr-left').removeClass('active');
	$('.home-brand .arr-right').removeClass('active');
	if (curBradProd > 0) $('.home-brand .arr-left').addClass('active');
	if (numBradProds - 5 - curBradProd > 0) $('.home-brand .arr-right').addClass('active');
}




$(document).ready(function(){
	showHomeCollage();
	homeCollectionInit();
	homeHitProdInit();
	homeBradProdInit();
	collectionTimeoutID = window.setTimeout(homeCollectionSlideRight, 5000);
	HitProdTimeoutID = window.setTimeout(homeHitProdSlideRight, 5000);
	BradProdTimeoutID = window.setTimeout(homeBradProdSlideRight, 5000);

	if (screen.width <= 480) {
		$('.home_description').appendTo( $('.index_block.santehnika') );
	}	
});