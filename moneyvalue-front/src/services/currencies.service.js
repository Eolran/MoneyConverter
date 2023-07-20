export default async function getCurrencies() {
    const response = await fetch('http://localhost:8000/api/currencies')
    return await response.json()
}