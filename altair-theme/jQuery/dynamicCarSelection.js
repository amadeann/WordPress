/* Following script is basedon the example here:
http://stackoverflow.com/questions/20483470/javascript-dynamic-drop-down-menu-values */

    var items = [
    {
        name:'Audi', 
        value: 'Audi', 
        subitems: [
            {name: 'A5', value: 'A5'}, 
            {name:'Q5', value:'Q5'},
            {name:'Q7', value:'Q7'}
        ]
    },
    {
        name: 'Tesla',
        value: 'Tesla',
        subitems: [
            {name: 'X', value:'X'}
        ]
    },
    {
        name: 'Volkswagen',
        value: 'Volkswagen',
        subitems: [
            {name: '181', value: '181'},
            {name: 'Amarok', value: 'Amarok'},
            {name: 'Apollo', value: 'Apollo'},
            {name: 'Beetle A6', value: 'Beetle A6'},
            {name: 'Beetle', value: 'Beetle'},
            {name: 'Brasilia', value: 'Brasilia'},
            {name: 'Caddy', value: 'Caddy'},
            {name: 'California', value: 'California'},
            {name: 'CC', value: 'CC'},
            {name: 'Corrado', value: 'Corrado'},
            {name: 'Country Buggy', value: 'Country Buggy'},
            {name: 'Derby', value: 'Derby'},
            {name: 'Eos', value: 'Eos'},
            {name: 'Fox', value: 'Fox'},
            {name: 'Gol G1', value: 'Gol G1'},
            {name: 'Gol G2, G3, G4', value: 'Gol G2, G3, G4'},
            {name: 'Golf G5 ', value: 'Golf G5 '},
            {name: 'Golf Mk1', value: 'Golf Mk1'},
            {name: 'Golf Mk2', value: 'Golf Mk2'},
            {name: 'Golf Mk3', value: 'Golf Mk3'},
            {name: 'Golf Mk4', value: 'Golf Mk4'},
            {name: 'Golf Mk5', value: 'Golf Mk5'},
            {name: 'Golf Mk6', value: 'Golf Mk6'},
            {name: 'Jetta A1', value: 'Jetta A1'},
            {name: 'Jetta A2', value: 'Jetta A2'},
            {name: 'Jetta A3', value: 'Jetta A3'},
            {name: 'Jetta A4', value: 'Jetta A4'},
            {name: 'Jetta', value: 'Jetta'},
            {name: 'K70', value: 'K70'},
            {name: 'Karmann Ghia', value: 'Karmann Ghia'},
            {name: 'Kübelwagen', value: 'Kübelwagen'},
            {name: 'Lavida', value: 'Lavida'},
            {name: 'Lupo', value: 'Lupo'},
            {name: 'New Beetle', value: 'New Beetle'},
            {name: 'Passat B1', value: 'Passat B1'},
            {name: 'Passat B2', value: 'Passat B2'},
            {name: 'Passat B3', value: 'Passat B3'},
            {name: 'Passat B4', value: 'Passat B4'},
            {name: 'Passat B5', value: 'Passat B5'},
            {name: 'Passat B6', value: 'Passat B6'},
            {name: 'Passat B7', value: 'Passat B7'},
            {name: 'Passat CC', value: 'Passat CC'},
            {name: 'Phaeton', value: 'Phaeton'},
            {name: 'Pointer', value: 'Pointer'},
            {name: 'Polo Mk1', value: 'Polo Mk1'},
            {name: 'Polo Mk2', value: 'Polo Mk2'},
            {name: 'Polo Mk3', value: 'Polo Mk3'},
            {name: 'Polo Mk4', value: 'Polo Mk4'},
            {name: 'Polo Mk5', value: 'Polo Mk5'},
            {name: 'Polo Playa', value: 'Polo Playa'},
            {name: 'Porsche 914', value: 'Porsche 914'},
            {name: 'Routan', value: 'Routan'},
            {name: 'Santana', value: 'Santana'},
            {name: 'Schwimmwagen', value: 'Schwimmwagen'},
            {name: 'Scirocco I', value: 'Scirocco I'},
            {name: 'Scirocco II', value: 'Scirocco II'},
            {name: 'Scirocco III', value: 'Scirocco III'},
            {name: 'Sharan', value: 'Sharan'},
            {name: 'SP2', value: 'SP2'},
            {name: 'Tiguan', value: 'Tiguan'},
            {name: 'Touareg II', value: 'Touareg II'},
            {name: 'Touran', value: 'Touran'},
            {name: 'Type 2 T1', value: 'Type 2 T1'},
            {name: 'Type 2 T2', value: 'Type 2 T2'},
            {name: 'Type 2 T3', value: 'Type 2 T3'},
            {name: 'Type 2 T4', value: 'Type 2 T4'},
            {name: 'Type 2 T5', value: 'Type 2 T5'},
            {name: 'Type 3', value: 'Type 3'},
            {name: 'Type 4', value: 'Type 4'},
            {name: 'Up', value: 'Up'},
            {name: 'Vento', value: 'Vento'}
        ]
    }
];

/* 'car-brands-1' is an id of a drop-down menu with car brands 
'car-models-1' is an id of a drop-down menu with models of a given brand */


jQuery(function(){
    var temp = {};

    jQuery.each(items, function(){
        jQuery("<option />")
        .attr("value", this.value)
        .html(this.name)
        .appendTo("#car-brands-1");
        temp[this.value] = this.subitems;
    });

    jQuery("#car-brands-1").change(function(){
        var value = jQuery(this).val();
        var menu = jQuery("#car-models-1");

        menu.empty();
        jQuery.each(temp[value], function(){
            jQuery("<option />")
            .attr("value", this.value)
            .html(this.name)
            .appendTo(menu);
        });
    }).change();


});