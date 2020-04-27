const positif = document.queryselector('#positif');
const sembuh = document.queryselector('#sembuh');
const meninggal = document.queryselector('#meninggal');

async function getData() {
	const response = await fetch('https://api.kawalcorona.com/indonesia/');
	const data = await response.json();
	positif.innerText = data[0].positif;
	sembuh.innerText = data[0].sembuh;
	meninggal.innerText = data[0].meninggal;
}

getData();