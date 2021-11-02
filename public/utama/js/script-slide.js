const select = (el, all = false) => {
	el = el.trim()
	if (all) {
		return [...document.querySelectorAll(el)]
	} else {
		return document.querySelector(el)
	}
}
let teamContainer = select('.team-container');
let teamIsotope = new Isotope(teamContainer, {
	itemSelector: '.team-item'
});
let filterTerpilih = "*";
var galleryItems = document.querySelector(".gallery-items").children;
const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const maxItem = 4;
var index = 1;

function paginate() {
	var pagination = Math.ceil(galleryItems.length / maxItem);
	return pagination;
}

const halaman = document.querySelector(".pagination").children


// untuk merubah ada berapa halaman
function jmlHalaman() {
	if (paginate()) {
		for (let i = 1; i < halaman.length - 1; i++) {
			const element = halaman[i];
			if (i > paginate()) {
				element.classList.add("d-none");
			} else {
				element.classList.remove("d-none");
				element.addEventListener("click", function (event){
					event.preventDefault();
					index = i;
					check()
					numbering();
					showItems();
				})
			}
		}
	} else {
		for (let i = 1; i < halaman.length - 1; i++) {
			const element = halaman[i];
			element.classList.add("d-none");
		}
	}
}

prev.addEventListener("click", function (event) {
	event.preventDefault();
	index--;
	numbering();
	check();
	showItems();
})
next.addEventListener("click", function (event) {
	event.preventDefault();
	index++;
	numbering();
	check();
	showItems();
})

function check() {
	if (index == paginate()) {
		next.classList.add("disabled");
		next.parentElement.classList.add("disabled");
	}
	else {
		next.classList.remove("disabled");
		next.parentElement.classList.remove("disabled");
	}

	if (index == 1) {
		prev.classList.add("disabled");
		prev.parentElement.classList.add("disabled");
	}
	else {
		prev.classList.remove("disabled");
		prev.parentElement.classList.remove("disabled");
	}
	if (paginate() == 0) {
		prev.classList.add("disabled");
		prev.parentElement.classList.add("disabled");
		next.classList.add("disabled");
		next.parentElement.classList.add("disabled");
	}
}

function showItems() {
	portfolioIsotope.arrange({
		filter: filterTerpilih + ".p" + index
	});
}

// untuk merubah halaman mana yang sedang aktif
function numbering() {
	for (let i = 1; i < halaman.length - 1; i++) {
		const element = halaman[i];
		if (i == index) {
			element.classList.add("active");
		} else {
			element.classList.remove("active")
		}
	}
}

function givePageLabel() {
	let maxPic = document.querySelector(".gallery-items").children;
	let maxPerulangan = Math.ceil(maxPic.length / maxItem);
	let idx = 1;
	for (let z = 1; z <= maxPerulangan; z++) {
		for (let i = 0; i < maxPic.length; i++) {
			maxPic[i].classList.remove("p" + z);
		}
	}
	for (let i = 0; i < galleryItems.length; i++) {
		
		if (i >= (idx * maxItem) - maxItem && i < idx * maxItem) {
			galleryItems[i].classList.add("p" + idx);
		} else {
			idx++;
			galleryItems[i].classList.add("p" + idx);
		}
	}
}

window.onload = function () {
	givePageLabel();
	check();
	numbering();
	jmlHalaman();
	showItems();
}








