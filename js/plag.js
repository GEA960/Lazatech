const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/json',
		'X-RapidAPI-Key': 'b36987b24fmshe1b95f7c4bfd0f7p173746jsn6903703f1f5c',
		'X-RapidAPI-Host': 'plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com'
	},
	body: '{"text":"Code editors are tools typically used by programmers and web developers to write and edit code. They are used for developing software and apps as well as other web development purposes.","language":"en","includeCitations":false,"scrapeSources":false}'
};

fetch('https://plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com/plagiarism', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));