(() => {

    const fs = require("fs");

    // читаешь содержимое из файла
    const content = fs.readFileSync(__dirname + "/gostinicy.json", {
        encoding: "utf8"
    });

    // преобразовываешь в объект
    const json = JSON.parse(String(content));

    // производишь манипуляции
    const dist = {
        coordinates: json.hotel_koordinates,
    };

    // преобразоываешь в строку
    const string =  JSON.stringify(dist)

    // записываешь в результирующий файл
    fs.writeFileSync(__dirname + "/data.json", string);

})();