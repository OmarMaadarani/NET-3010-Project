// FILE WRITTEN BY OMAR TO GET LISTINGS FROM DB
async function getLists() {
	let url = "../php/getListings.php"
	let res = await fetch(url)
	let data = await res.json()

	console.log(data)

	const listingsDiv = document.getElementById("listings")
	data.forEach((list) => {
		let id = list.listingID
		let name = list.year + " " + list.carMake + " " + list.carModel
		let desc = list.description
		let price = list.price
		let img = list.img
		let mileage = list.mileage

		listingsDiv.innerHTML += `<div class="row mb-3">
    <div class="col thumb">
        <img class="listing-thumb" src="${img}">
    </div>
    <div class="col">
        <a>${name}</a>
        <p class="description">
            ${desc}
        </p>
        <p><span class="mileage">Kilometers:</span> ${mileage} km</p>
    </div>
    <div class="col price">
        <div class="listing-price">$${price}</div>
        <a id=${id} class="btn btn-primary" role="button" onClick="addFavourite(this.id);">Favourite</a>
    </div>
</div>
</div>`
	})
}

getLists()
