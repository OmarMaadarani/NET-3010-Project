/**
 * WRITTEN BY OMAR TO GET CAR INFO FROM API
 * cars.js
 *
 * File with functions to make REST API Calls to the CarAPI
 * 
 * Create an Account to test requests here: https://carapi.app/register
 * You can test each Request here: https://carapi.app/api#/
 * When testing requests, you have to run the Auth POST Request, Use your Account API token and secret (you will need to generate one)
 *
 * Function template:
 * export async function getX() {
    const req = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": "44fb4bdc15msh2f17867bcccf684p11b0f7jsn47970b09f7a1",
        "X-RapidAPI-Host": "car-api2.p.rapidapi.com",
      },
    }
    // NOTE: YOU NEED TO ADD YEAR=2020 TO REQ URL FOR REQUESTS ABOUT CAR MAKES, THE FREE VERSION ONLY ALLOWS FOR 2020 CARS
    let url = "getReqURL" => Create Request URLs here (https://rapidapi.com/carapi/api/car-api2)
    const res = await (await fetch(url, req)).json()

    let data = res.data
    return data
  }
 *
 */

export async function getMakes() {
	const req = {
		method: "GET",
		headers: {
			"X-RapidAPI-Key": "44fb4bdc15msh2f17867bcccf684p11b0f7jsn47970b09f7a1",
			"X-RapidAPI-Host": "car-api2.p.rapidapi.com",
		},
	}
	let url = "https://car-api2.p.rapidapi.com/api/makes?direction=asc&sort=name"
	const res = await (await fetch(url, req)).json()

	let makes = res.data
	return makes
}

export async function getModels(make) {
	const req = {
		method: "GET",
		headers: {
			"X-RapidAPI-Key": "44fb4bdc15msh2f17867bcccf684p11b0f7jsn47970b09f7a1",
			"X-RapidAPI-Host": "car-api2.p.rapidapi.com",
		},
	}
	let url = `https://car-api2.p.rapidapi.com/api/models?make=${make}&year=2020&sort=id&direction=asc`
	const res = await (await fetch(url, req)).json()

	let models = res.data
	return models
}

//auth()
/*caches.open("carApi").then((cache) => {
	cache.add(auth())
})*/
