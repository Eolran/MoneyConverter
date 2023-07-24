export default async function login(user, password) {
    const Init = {
        method: "POST",
        body: JSON.stringify({
            "usrnm": user,
            "pwrd": password
          })
    }
    const response = await fetch('http://localhost:8000/api/login', Init)
    return await response.json()
}


export async function deleteCurr(id) {
    const response = await fetch('http://localhost:8000/api/deleteCurr/'+id)
    return response
}

export async function deletePair(id) {
    const response = await fetch('http://localhost:8000/api/deletePair/'+id)
    return response
}

export async function updatePair(id, rate) {
    const Init = {
        method: "POST",
        body: JSON.stringify({
            "rate": rate,
          })
    }

    const response = await fetch('http://localhost:8000/api/updatePair/'+id, Init)
    return await response.json()
}

export async function createCurrency(name, code) {
    const Init = {
        method: "POST",
        body: JSON.stringify({
            "name": name,
            "code": code
          })
    }
    const response = await fetch('http://localhost:8000/api/createCurrency', Init)
    return await response.json()
}

export async function createPair(from, to, rate) {
    const Init = {
        method: "POST",
        body: JSON.stringify({
            "from": from,
            "to": to,
            "rate": rate
          })
    }
    const response = await fetch('http://localhost:8000/api/createPair', Init)
    return await response.json()
}