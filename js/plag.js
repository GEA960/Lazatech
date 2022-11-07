
fetch('https://plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com/plagiarism', options)
	.then(response => response.json())
	.then(response => console.log(response))
 	.catch(err => console.error(err));