const json = '{ "name": "La Plateforme_", "address": "8 rue dhozier", "city": "Marseille", "nb_staff": 11, "creation": 2019 }';
const obj = JSON.parse(json);
console.log(obj.name);

function jsonValueKey(json, key) {
    const obj = JSON.parse(json);
    return obj[key];
}

console.log(jsonValueKey(json, "city"));