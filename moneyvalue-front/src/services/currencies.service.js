export default async function getPairs() {
    const response = await fetch('http://localhost:8000/api/pairs')
    return await response.json()
}

export async function getCurrencies() {
    const response = await fetch('http://localhost:8000/api/currencies')
    return await response.json()
}