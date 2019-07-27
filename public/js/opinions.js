ajaxGet('./src/service/opinions.JSON', function (data){
    let opinions = JSON.parse(data);
    opinions.forEach((opinion) => {

        // Create the <div> element that will carry the opinion
        newBlock = document.createElement("div");
        newBlock.classList.add("testimonial-list-item", "col-md-6");
        $(".opinionBlock").append(newBlock);

        // Create the <img> element
        img = document.createElement("img");
        img.classList.add("pull-left", "img-responsive", "quote-author-list");
        $(newBlock).append(img);

        // Create the <blockquote> element
        blockquote = document.createElement("blockquote");
        $(newBlock).append(blockquote);

        // Create the <p> element
        newText = document.createElement("p");
        $(blockquote).append(newText);

        // Create the <small> element
        small = document.createElement("small");
        $(blockquote).append(small);

        // Populate with the retrieved datas
        image = opinion.image;
        words = opinion.words;
        person = opinion.person;
        role = opinion.role;
        company = opinion.company;

        $(img).attr('src', './public/images/about/' + image);
        $(img).attr('alt', 'Portrait ' + person);
        $(newText).html(words);
        $(small).html(person + ' | ' + role + ' at ' + company);
    });
});