const Parser = require("rss-parser");
let parser = new Parser({
    customFields: {
        item: ["date","updated", "lead", "lead", "category", "category"],
      }
});


module.exports = async function() {
	let feed = await parser.parseURL("https://journal.stef-nia.me/feed/feed.xml");
	return feed.items;
};
