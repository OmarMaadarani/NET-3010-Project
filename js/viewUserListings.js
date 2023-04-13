// WRITTEN BY OMAR

async function getLists() {
	let url = "/NET-3010-Project/php/getUserListings.php"
	let res = await fetch(url)
	let data = await res.json()

	console.log(data)

	const listingsDiv = document.getElementById("listings")
	data.forEach((list) => {
		let name = list.year + " " + list.carMake + " " + list.carModel
		let desc = list.description
		let price = list.price
		let img = list.img
		let mileage = list.mileage

		listingsDiv.innerHTML += `<div class="row mb-3">
    <div class="col thumb">
        <img class="listing-thumb" src="data:image/jpg;base64,${img}">
    </div>
    <div class="col">
        <a href="#">${name}</a>
        <p class="description">
            ${desc}
        </p>
        <p><span class="mileage">Kilometers:</span> ${mileage} km</p>
    </div>
    <div class="col price">
        <div class="listing-price">${price}</div>
        <a href="#" class="btn btn-primary" role="button">Edit</a>
    </div>
</div>
`
	})
}

getLists()
