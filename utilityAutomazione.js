fetch("../home.php").then(async response => {
    try {
        const data = await response.json()
        console.log('response data?', data)
    } catch(error) {
        console.log('Error happened here!')
        console.error(error)
    }
})