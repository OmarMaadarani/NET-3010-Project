import { getMakes, getModels } from "./cars.js"

// Get Car Makes and add them to the Makes dropdown list
let makes = await getMakes()
const makesDiv = document.getElementById("make")
makes.forEach((make) => {
	makesDiv.innerHTML += `<option>${make.name}</option>`
	//console.log(make.name)
})

// Call function changeModels initial on load, and whenever a new car make is selected
changeModels(document.getElementById("make").value)
document.getElementById("make").addEventListener("change", (e) => {
	changeModels(e.target.value)
})

// Function: Update dropdown list for Car Models based on the Car Make Dropdown Value
async function changeModels(make) {
	const modelsDiv = document.getElementById("model")
	modelsDiv.replaceChildren()
	modelsDiv.innerHTML += "<option disabled selected value> -- Select a Car Model -- </option>"
	let models = await getModels(make)
	models.forEach((model) => {
		modelsDiv.innerHTML += `<option>${model.name}</option>`
		//console.log(model.name)
	})
}
