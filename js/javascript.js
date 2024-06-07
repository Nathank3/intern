   
    // Sample data for counties, sub-counties, and wards
const countyData = {
    "Makueni": {
        "Makueni": ["Nzaui/Kalamba","Muvau","Kathonzweni","Mavindini","Kitise/Kithuki","Wote","Mbitini"],
        "Mbooni": ["Tulimani","Mbooni","Kithungo","Kisau/Kiteta","Kako/Waia","Kalawa"],
        "Kaiti": ["Kee","Kilungu","Ilima","Ukia"],
        "Kilome": ["Kiima", "Kiu/Kalanzoni","Mukaa","Kasikeu"],
        "Kibwezi East": ["Thange", "Ivingoni", "Mtito Andei","Masongaleni"],
        "Kibwezi West": ["Makindu","Nguumo","Nguu/Masumba","Emali/Mulala", "Kikumbulyu North", "Kikumbulyu South"],
        
    },

    "Machakos": {
        "Masinga": ["Kivaa","ndithini","Ekalakala","Muthesya","Masinga Central"],
        "Yatta": ["Ndalani","Katangi","Ikomba","Kithimani","Matuu,"],
        "Kangundo": ["Kangundo North "," Kangundo Central","Kangundo West","Kangundo East"],
        "Matungulu": ["Tala ", "Matungulu West","Kyeleni","Matungulu North","Matungulu East"],
        "Machakos Town": ["Kalama", "Mua", "Mutitini", "Machakos Central", "Kola", "Muvuti/Kiima-Kimwe","Mumbuni North"],
        "Mavoko": ["Syokimau/Mulolongo","Athi River","Kinanie","Muthwani"],
        "Kathiani": ["Upper Kaewa/Iveti", "Lower Kaewa/Kaani", "Kathiani Central","Mitaboni"],
        "Mwala": ["Muthetheni", "Mbiuni", "Wamunyu","Makutano/Mwala","Masii"],
    },
   
   "Kitui": {
        "Kitui West": ["Matinyani","Kithumula/Kwa Mutonga","Kauwi","Mitongini"],
        "Kitui South": ["Athi","Ikutha/Kyatune","Kanziko","Mutomo","Ikanga/Kyatune"],
        "Kitui East": ["Chuluni ","Nzambani","Endau/Malaani"," Mwitika/Zombe","Mutito/Kaliku","Voo/Kyamatu"],
        "Kitui Central": ["Miambani ", "Township","Kyangithya East","Kyangithya West"],
        "Kitui Rural": ["Kisasi", "Mbitini", "Kwa Vonza","Kanyangi"],
        "Mwingi North": ["Tseikuru","Kyuso","Mumoni","Ngomeni","Tharaka"],
        "Mwingi West": ["Migwani", "Nguutani", " Kyome/Thaana","Kiomo/Kyethani"],
        "Mwingi Central": ["Nguni", "Nuu","Central", "Mui","Waita","Kivou"],
    },
    "Bomet": {
        "Bomet East": ["Kembu","Longisa","Kipreres","Chemaner","Merigi "],
        "Bomet Central": ["Silibwet","Singorwet","Ndarawetta","Chesoen  ","Mutarakwa,"],
        "Sotik": ["Ndanai/Abosi","Manaret/Rongena","Kipsonoi","Kapletundo","Chemagel"],
        "Konoin": ["Kimulot","Chepchabas", "Mogogosiek","Embomos","Boito"],
        "Chepalungu": ["Sigor","Siongiroi", "Kongasis", "Nyongores","Chebunyo"],
       
    },

    "Kericho": {
        "Bureti": ["Kisiara", "Tebesonik","Cheboin", "Chemosot", "Litein","Cheplanget", "Kapkatet"],
        "Belgut": ["Waldai", "Kabianga","Cheptororiet/Seretut","Chaik", "Kapsuser"],
        "Ainamoi": ["Kapsoit", "Ainamoi", "Kipchebor", "Kapkugerwet","Kipchimchim", "Kapsaos"],
        "Kipkelion East": ["Londiani","Chepseon", "Soget","Kendowa"],
        "Kipkelion West": ["Kunyak","Kamasian","Kipkelion", "Chilchila"],
        "Soin/Sigowet": ["Sigowet","Soliat", "Soin", "Kaplelatert"],
       
    },

    "Meru": {
        "Igembe South": ["Maua","Gaiti","Kegoi","Athiru","Akachiu","Kanuni"],
        "North Imenti": ["Municipality","Ntima East","Ntima West","Nyaki, East","Nyaki West"],
        "Central Imenti": ["Kibirichia","Kiagu","Mwangathia","Abothuguchi Central","Abothuguchi West"],
        "Tigania East": ["Thangatha", "Mikinduri", "Kiguchwa", "Mithara", "Karama"],
        "Tigania West": ["Athwana", "Akithi", "Kianjai", "Nkomo", "Mbeu"],
        "Igembe North": ["Antuambui", "Ntunene", "Antubetwe Kiongo", "Naathui", "Amwathi"],
        "Igembe Central": [ "Akirang'ondu", "Athiru", "Ruujine", "Igembe East Njia", "Kangeta"],
        "South Imenti": ["Mitunguu","Igoji East","Igoji West","Nkuete","Abogeta East","Abogeta West"],
        "Buuri": ["Timau","Kisima","Kiirua/Naari","Ruiri/Rwarera"],
       
       
    },

     "Bungoma": {
        "Bumula": ["Khibuki","Khasoko","Bumula","Siboti","South Bukusu","Khasono","West Bukusu"],
        "Kanduyi": ["Bukembe West", "Bukembe East", "Township","Khalaba" ,"Musikoma" , "East Snag'alo", "Marakatu", "Tuuti", "West Sang'alo"],
        "Webuye East": ["Mihuu", "Ndivisi"," Maraka"],
        "Webuye West": ["Sitikho", "Matulo", "Bokoli"],
        "Kimilili": ["kimilili","Maeni","Kamukuywa","Kimingei"],
        "Tongaren": ["Mitua","Tongaren","Tabani","Milima","Mbakalo","Naitiri"],
        "Kabuchai": ["Mukuyuni","Chwele","South Bukusu","West Nalondo","Bwake/Luuya"],
        "Sirisia": ["Namwela","Lwandanyi","Malakisi"],
        "Mt. Elgon": ["Cheptais","Elgon","Kaptama","Kapkateny","Chesikaki","Chepyuk"],
       
       
    },

    "Baringo": {
        "Baringo North": ["Barwessa","Kabartonjo","Saimo/Kipsara Man","Saimo/Soi","Bartabwa"],
        "Baringo Central": ["Kabarnet","Ewalel/Chapcha,", "Sacho", "Tenges", "Kapropita"],
        "Baringo South": ["Marigat", "Ilchamus", "Mochongoi", "Mukutani"],
        "Mogotio": ["Mogotio", "Emining", "Kisanana"],
        "Eldama Ravine": ["Ravine","Lembus Kwen","Lembus","Pekerra", "Mumberes"],
        "Tiaty": ["Tiriokwa","Kolowa","Ribkwo","Silale","Loiyamorock","Korossi","Churo/Amaya"],   
    },

    "Siaya": {
        "Ugunja ": ["Sidindi", "Sigomere", "Ugunja"],
        "Alego Usonga": ["Usonga", "West Alego", "Central Alego", "Siaya Township", "North Alego", "South East Alego"],
        "Gem": ["North Gem", "West Gem", "Central Gem", "Yala, Township", "East Gem", "South Gem"],
        "Bondo": ["West Yimbo", "Central Sakwa", "South Sakwa", "Yimbo East", "West Sakwa", "North Sakwa"],
        "Rarienda": ["East Asembo", "West Asembo","East Uyoma","West Uyoma", "South Uyoma"], 
        "Ungenya": ["Ukwala","West Ungenya","East Ungenya","North Ungenya"]  
    },

    "Mombasa": {
        "Mvita ": ["Makadara", "Tudor", "Tononoka", "Majengo Ganjoni/Shimanz"],
        "Jomvu": ["Jomvu Kuu", "Mikindani", "Magongo"],
        "Changamwe": ["Port Reitz", "Kipevu", "Airport", "Changamwe", "Chaani"],
        "Kisauni": ["Mjambere", "Junda", "Bamburi", "Mwakirunge", "Mtopanga", "Magogoni", "Shanzu"],
        "Likoni": ["Mtongwe", "Shika Adabu", "Bofu", "Likoni", "Timbwani"], 
        "Nyali": ["Frere Town", "Ziwa la Ngombe", "Mkomani", "Kongowea", "Kadzandani"]  
    },

    "Laikipia": {
        "Laikipia East ": ["Ngobit","Tigithi","Thingithu","Nanyuki","Umande"],
        "Laikipia West": ["Ol-Moran","Rumuruti","Township","Githiga","Marmanet","Igwamiti Salama"],
        
        "Laikipia North": ["Sosian","Segera","Mugogodo West","Mugogodo East"],
        
    },

    "Kwale" :{ 
        "Kinango":["Ndavaya","Puma","Kinango","Chengoni/Samburu","Mackinon Road","Mwavumbo","Kasemeni"],
        "Lunga Lunga":["Dzombo","Vanga","Mwereni","Kikoneni","Pongwe"],
        "Msambweni":["Gombato Bongwe","Ukunda","Kinondo","Ramisi"],
        "Matuga":["Waa","Tsimba Golini","Tiwi","Kubo South","Mkongani"],
    },

    "Kilifi" :{
        "Ganze":["Dugicha","Bamba","Jaribuni","Sokoke"],
        "Kaloleni":["Mariakani", "Kayafungo", "Kaloleni", 
            "Mwanamwinga"],
        "Kilifi North":["Tezo", "Sokoni", "Kibarani", "Dabaso", "Matsangoni", "Watamu","Mnaran"],
        "Kilifi South":["Junju", "Mwarakaya", "Shimo la Tewa", "Chasimba", "Mtepeni"],
        "Magarini":["find"],
        "Rabai":["Mwawesa","Ruruma", "Jibana", "Rabai/Kisurutuni"],
        "Malindi":["Jilore","Kakuyuni","Malindi Town","Shella","Ganda"]

    },

    "Tana River" :{
        "Bura ":["Chewele", "Hirimani", "Bangale", "Sala", "Madogo"],
        "Galole":["Kinakomba", "Mikinduni" ,"Chewani", "Wayu"],
        "Garsen":["Kipini East", "Garsen South", "Kipini West","Garsen Central","Garsen West","Garsen North"],
      },

    "Kisii" :{
        "Kitutu Chache North":["Sensi"," Marani","Mwamonari","Monyerera"],
        "Kitutu Chache":["Bogusero","Bogeka","Nyakoe","Kitutu Central","Nyatieko"],
        "Nyaribari Masaba":["Ichuni","Nyamasibi","Masimba","Gesusu","Kiamokama"],
        "Nyaribari Chache":[],
        "Bomachoge Borabu":["Borabu Masaba","Boochi Borabu","Magenche","Bokimonge"],
        "Bomachoge Chache":["Majonge Basi","Boochi","Bosoti"],
        "Bobasi":["Masinge West","Masinge East","Basi Central","Nyacheki","Basi Bogetaoio","Sameta","Bobasi Chache","Bobasi/Boitangare"],
        "South Mugirango":["Bogetenga","Borabu","Moticho","Getenga","Tabaka","Boikanga"],
        "Bonchari":["Bomariba","Riana","Bokeira","Bogiakumu"],

    },

    "Nyamira" :{ 
        "Borabu":["Mekenene","Esie","Nyansiongo","Kiabonyoru"],
        "Kitutu Masaba":["Rigoma","Kemera","Manga","Magombo","Gesima","Gachuba"],
        "Mugirango West":["Township","Bosamaro","Bonyamatuta","Bogichora","Nyamaiya"],
        "Mugirango North":["Bokeira","Bomwagamo","Township","Itibo","Ekerenyo"],
        
    },

     "Nairobi" :{
        "Dagoretti North":["Kilimani", "Kawangware"," Gatina", "Kileleshwa", "Kabiro"],
        "Dagoretti South":["Mutu-Ini", "Ngando"," Riruta", "Uthiru/Ruthimitu"," Waithaka"],
        "Embakasi Central":["Kayole North","Kayole South","Kayole Central","Komarock","Matopeni"],
        "Embakasi East ":["Upper Savvanah","Lower Savvanah","Embakasi","Utawala","Mihango"],
        "Embakasi North":["Kariobagi","Dandora Area I","Dandora Area II","Dandora Area III","Dandora Area IV"],
        "Embakasi South":["Imara Daima","Kwa Njenga","Kwa Reuben","Kware","Pipeline"],
        "Makadara":["viwandani","Harambee","Makongeni","Pumwani","EastLeigh North"],
        "Kamukunji":["EastLeigh South","Airbase","California","Ngara","Nairobi Central"],
        "Kasarani":["Clay City","Mwiki","Njiru","Ruai", "Kasarani"],
        "Kibra":["Laini Saba","Makina","Lindi","Kenyatta","Golf Course","Saragombe"],
        "Lang’ata":["Karen", "Nairobi West"," Mugumu-Ini", "South C", "Nyayo Highrise"],
        "Embakasi West":["Umoja I","Umoja II","Kariobagi South","Hamza","Mowlem"],
        "Mathare":["Huruma","Mabatini","Ngei","Kimaiko","Mlango Kubwa"],
        "Roysambu":["Githurai","Kahawa West","Kahawa","Roysambu","Zimnerman"],
        "Ruaraka":["Baba Dogo","Utalii","Mathare North","Korogocho","Lucky Summer"],
        "Starehe":["Pangani","Ziwani","Landimawe","Nairobi South","Hospital"],
        "Westlands":["Kitisuru", "Parklands/Highridge", "Karura", "Kangemi", "Mountain View"],

    },

    "Migori" :{
        "Awendo":["North-East Sakwa","South Sakwa","West Sakwa","Central Sakwa"] ,
        "Kuria East":["Gokeharaka/Getamwega","Ntimaru West","Ntimaru East","Nyabasi East","Nyabasi West"],
        "Kuria West":["Bukira East","Bukira Central/Ikerege","Isibania","Makerero","Masaba","Tagare","Nyamosense/Komosoko"],
        "Nyatike":["Kachieng’ ","Kanyasa","North Kadem","Macalder/Kanyarwanda","Kaler","Got Kachola","Muhuru","Kuria West","Bukira East","Ikerege","Isibania"],
        
        "Rongo":["North Kamagambo","Central Kamagambo","East Kamagambo","South Kamagambo"],
        "Suna East":["God Jope","Suna Central","Kakrao","Kwa"],
        "Suna West":["Wiga","Wasweta II","Ragan-Oruba","Wasimbete"],
        "Uriri":["West Kanyamkago","North Kanyamkago","Central Kanyamkago","South Kanyamkago","East Kanyamkago"],

    },
    "Homa Bay" :{
        "Homabay Town":["Homabay Central","Homabay Arujo","Homabay West","Homabay East"],
        "Kabondo":["Kojwach","Kakel/Kokwanyo","Kabondo West","Kabondo East"],
        "Karachuonyo":["Central Karachuonyo","North Karachuonyo","West Karachuonyo","Kanyaluo","Kibiri","Wang'chieng","Kendu Bay Town"],
        "Kasipul":["West Kasipul","South Kasipul"," central Kasipul","East Kamagak","West Kamagak"],
        "Mbita":["Rusinga Island","Mfagani Island","Kasgunga","Gembe","Lambwe"],
        "Ndhiwa":["Kwabwai","Kanyandoto","Kanyikela","Pala","Kanyamwa Kalogi","Kanyamwa Kosewe","Kabuoch North"],
        "Rangwe":["West Gem","East Gem","Kochia","Kagan"],
        "Suba":["Gwasi North","Gwasi South","Kaksingri West","Ruma Kaskingri"],

    },

    "Busia" :{
        "Matyos":["Burumba","Mayenje","Busibwabo","Matyos South","Bukhayo West"],
        "Butula":["Marachi North","Marachi West"," Marachi Central","  Marachi East","Elugulu Kingandol"],
        "Samia":["Bwiri","Nangina","Ageng'a Nanguba"," Namboboto Nakumbu",""],
        "Nambale ":["Nambale Township","Bukhao East","Waltsi","Bukhayo Central"],
        "Teso North":["Malaba Central","Malaba South","Ang'uria North","Ang'uria South","malaba North","Ang'uria East"],
        "Teso South":["Chakol South","Ang'orom","Amukura Central","Amukura East","Chakol North ","Amukura West"],
        "Bunyala":["Bunyala West","Bunyala South","Bunyala North","Bunyala Central"]
  },

    "Kisumu" :{ 
        "Kisumu Central":["Raliways","Migosi","Shaurimoyo","Kaloleni","Market Milimani","Kondele","Nyalenda B"],
        "Kisumu East":["Kajulu","Kolwa East","Manyatta ‘B’","Nyalenda ‘A’","Kolwa Central"],
        "Kisumu West":["Kisumu North","West Kisumu","North West Kisumu","Central Kisumu","South West Kisumu"],
        "Muhoroni":["Miwani","Ombeyi","Masongo","Chemelil/Muhoroni","Koru"],
        "Nyakach":["West Nyakach","South East Nyakach","North Nyakach","Central Nyakach","South West Nyakach "],
        "Nyando":["Ahero","East Kano","Awasi","Kabonyo","Kobura"],
        "Seme":["West Seme","Central Seme","East Seme","North Seme"],

    },

    "Vihiga" :{
        "Emuhaya":["North East Bunyore","Central Bunyore","West Bunyore"],
        "Hamisi":["Shiru","Gisambai","Banja","Shamakhokho","Muhudi","Tambaa"],
        "Luanda":["Luanda Township","Wemilabi","Mwibona","Luanda South","Emabungo"],
        "Sabatia":["Lyaaduywa/Izava","West Sabatia","Chavakali North","Maragoli","Wodanga","Busali"],
        "Vihiga":["Mungoma","Central Maragoli","South Maragoli","Lugaga-Wamuluma"],
        
    },

     "Kakamega" :{
        "Malava":["West Kabras","Kabras","Chemuche East","Butali","South Kabras","Manda shivanga","Shirungu Mungai"],
        "Shinyalu":["Isukha North","Isukha West","Isukha East" ,"Murhanda","Isukha South"],
        "Ikolomani":["Idakho South","Idakho East","Idakho North","Idakho central"],
        "Khwisero":["Kisa North","Kisa East","Kisa West","Kisa Central"],
        "Navakholo":["Esumeyia","Bunyala West","Bunyala East","Bunyala Central","Ingostse-Mathia","Shinoyi-Shikomari"],
        "Lugari":["Mautuma","Lugari","Lumakanda","Chekalini","Chevaywa","Lawandeti"],
        "Likuyani":["Likuani","Sango","Kongoni","Sinoko","Nzoia"],
        "Lurambi":["Boutsotso East","Boutsotso South","Boutsotso Central","Sheywe","Shirere","Mahiakalo"],
        "Mumias West":["Mumias Central","Mumias North","Musanda","Etenje"],
        "Mumias East":["Lubinu","Malaha","East Wanga"],
        "Mutungu":["Koyonzo","Kholera","Khalaba","Mayoni","Namamali"],
        "Butere":["Marama West","Marama Central","Marenyo-Shihanda","Maram North","Maram South"],

    },

     "Nakuru" :{
        "Bahati ":["Dondori","Kabatini","Umoja","Bahati","Kiamaina"],
        "Gilgil":["Gilgil","Elementaita","Eburu","Murindati","Malewa West"],
        "Kuresoi North":["Kiptororo","Nyota","Sirikwa","Kamara"],
        "Kuresoi South":["Amalo","Keringet","Tinet","Kiptangich"],
        "Molo":["Molo","Marishoni","Turi","Elburgon"],
        "Naivasha":["Biashara","Hells Gate","Lake View","Malella","Olkaria","Mai Mahiu","Naivasha","East Wandanyi"],
        "Nakuru Town East":["Biashara","Kivumbini","Flamingo","Menengai","Nakuru East"],
        "Nakuru Town West":["Shaabab","Rhoda","Kapkures","Kaptembwo","London","Barut"],
        "Njoro":["Mau Narok","Mauche","Kihingo","Njoro","Lare","Nessiut"],
        "Rongai":["Menengai West","Soin","Visoi","Solai","Mosop"],
        "Subukia":["Subukia","Kabazi","Wasenges"],

    },

    "Kajiado" :{
        "Kajiado North":["Olkeri","Ongata Rongai","Ngong","Oloolua","Nkaimurunya"],
        "Kajiado Central":["Purka","Ildamat","Dalalekutuk","Mapato North","Mapato South"],
        "Kajiado East":["Kputei North","Kitengla","Sholinke","Poka","Imaroro"],
        "Kajiado West":["Mosiro","Ewuaso","Magadi","Keekonyole","iloodokilani"],
        "Kajiado West":["Entonet","Rombo","Kimana","Keikulu","Eselen"],
       

    },

    "Nandi" :{
        "Aldai":["Kabwareng","Terik","Kemeloi-Maraba","Kobujoi","Kaptumo-Kaboi","Koyo-Ndurio"],
        "Chesumei":["Chemundu/Kapng’etuny","Kosirai","Lelmokwo/Ngechek","Kaptel/Kamoiywo","Kiptuya"],
        "Emgwen":["Chepkumia","Kapkangani","Kapsabet","Kilibwoni"],
        "Mosop ":["Chepterwai","Kipkaren","Kurgung/Surungai","Kabiyet","Ndalat","Kabisaga","Sangalo/Kebulonik"],
        "Tindiret":["Songhor/Soba","Tindiret","Chemelil/Chemase","Kapsimotwo"],
        "Nandi Hills":["Nandi Hills","Chepkunyuk","Ol’lessos","Kapchorua"],

    },

     "West Pokot" :{
        "Kapenguria":["Riwo","Kapenguria","Mnagei","Siyoi","Endugh","Sook"], 
        "Sigor":["Sekerr","Masool","Lomut","Weiwei",""],
        "Kacheliba":["Suam","Kodich","Kasei","Kapchok","Kiwawa","Alale"],
        "West Pokot":["Chepareria","Batei","Lelan","Tapach"],
        

    },

    "Uasin Gishu" :{  
        "Kesses":["Racecourse","Cheptiret/Kipchamo","Tulwet/Chuiyat","Tarakwa"],
        "Ainabkoi":["Kapsoya","Kaptagat","Ainabkoi/Olare"],
        "Kapseret":["Langas","Megun","Ngeria","Kipkenyo","Simat/Kapseret"],
        "Moiben ":["Kimumu","Moiben","Karuna/Meibeki","Sergoit","Tembelio"],
        "Soy":["Kuinet/Kapsuswa","Soy","Kipsomba","Segero/Barsombe","Ziwa","Moi’s Bridge","Kapkures"],
        "Turbo":["Huruma","Kapsaos","Kiplombe","Kamagut","Tapsagoi","Ngenyilel"],

    },

    "Samburu" :{ 
        "Samburu East":["Waso","Wamba East","Wamba West","Wamba North"],
        "Samburu North":["El-Barta","Nachola","Ndoto","Nyiro","Angata Nanyokie","Baawa"],
        "Samburu West":["Lodokejek","Suguta","Marmar","Losuul","Maralal","Poro"],
       
    },

    "Taita-Taveta" :{
        "Mwatate":["Bura","Chawia","Mwatate","Wusi-Kishamba","Ronge"],
        "Taveta":["Chala","Bomani","Mahoo","Mata","Mboghoni"],
        "Voi":["Ngolia","Marungu","Sagalla","Kaloleni","Mbololo","Kasigau"],
        "Wundanyi":["Werugha","Mwanda-Mghange","Wundanyi-Mbale","Wumingu-Kishushe"],
        

    },

    "Marsabit" :{
        "Laisamis":["Laisamis","Korr/Ngurunit","Loglogo","Kargi/South Horr","Lonyangalani/Mt.Kulal"],
        "Moyale":["Butiye","Sololo","Heilu/Manyatta","Golbo","Township","Uram","Obbu"],
        "North Hor":["Dukana","North Horr","Maikona","Turbi","Illeret"],
        "Saku":["Karare","Mountain","Sagante/Jaldesa"],
    },

    "Isiolo" :{
        "Isiolo":["Wabera","Bulla Pesa","Burat","Ngaremara","Oldonyiro"],
        "Merti":["Chari","Cherab"],
        "Garbatulla":["Kinna","Garbatulla","Sericho"],
        },

    "Embu" :{  
        "Manyatta":["Ruguru","Kithimu","Nginda","Mbeti North","Kirimari","Gaturi South"],
        "Mbeere North":["Nthawa","Muminji","Evuorore"],
        "Mbeere South":["Mwea","Amakm","Kiambere","Mavuria","Mbeti South"],
        "Runyenjes ":["Gaturi North","Kagaari South","Kagaari North","Central Ward","Kyeni North","Kyeni South"],
         },

    "Murang'a" :{
        "Gatanga ":["Ithanga","Kakuzi/Mitubiri","Mugumo-Ini"," Kihumbu-Ini","Gatanga","Kariara"],
        "Kahuro":["find"],
        "Kandara":["Ng’araria","Muruka","Kagungu-ini","Gaichanjiru"," Ithiru","Ruchu"],
        "Kangema ":["Kanyenya-ini","Muguru","Rwathia"],
        "Kigumo":["Kahumbu","Muthithi","Kigumo","Kangari","Kinyona"],
        "Kiharu":["Wangu","Mugoiri","Mbiri","Township","Murarandia","Gaturi"],
        "Mathioya":["Gitugi","Kiru","Kamacharia"],
        "Maragwa South":["Kimoroni/Wempa"," Makuyu"," Kambiti"," Kamahuha","Ichagaki","Nginda"],

    },

    "Kirinyanga" :{
        "Kirinyaga Central":["Mutira","Kanyekini","Kerugoya","Inoi"],
        "Gichungu":["Kabare Baragwi","Njukiini","Ngariama","Karumandi"],
        "Ndia":["Mukure","Kiine","Kariti"],
        "Mwea":["Mutithi","Kangai","Wamumu","Nyangati","Murindiko","Gathigiririr","Teberer"],
        
        
    },

     "Garissa" :{
        "Daadab":["Dertu", "Dadaab", "Labasigale", "Damajale", "Liboi", "Abakaile"],
        "Fafi":["Bura", "Dekaharia", "Jarajila", "Fafi", "Nanighi"],
        "Dujis":["Waberi","Galbet","Iftin","Township"],
     
        "Ijara":["Hulugho", "Sangailu", "Ijara", "Masalani"],
        "Lagdera":["Modogashe", "Bename", "Goreale", "Maalamin", "Sabena", "Baraki"],
        "Balambala":["Balambala","Danyere","Saka","Sankuri","Jarajara"],

    },
     "Wajir" :{
        "Eldas":["Eldas","Della","Elnur","Basir"],
        "Tarbaj":["Tarbaj","Elben","Saman","Wargadud"],
        "Wajir East":["Township","Wagberi","Khorof Hara","Barwaqo"],
        "Wajir North":["Gurar" ,"Bute","Korondille","Malkagufu","Batalu","Danaba","Godoma"],
        "Wajir South":["Bename","Burder","Dabajabula","Habaswein","Diff","Ibrahim Ure","Lagbogol South"],
        "Wajir West":["Ganyure","Hadado","Arbajahan","Adamasajide"],

    },

      "Nyeri" :{
        "Kieni East":["Gakawa", "Narumoru/Kiamathaga", "Kabaru"," Thegu"],
        "Kieni West":["Mugunda"," Gatarakwa","Endarasha/Mwiyogo","Mweiga"],
        "Mathira East":["Iriani","Karatina","Konyu", "Magutu"],
        "Mathira West":["Kirimukuyu","Ruguru"],
        "Mukurweini":["Mukurwe-ini Central","Mukurwe-ini West","Rugi","Gikondi"],
        "Nyeri Central":["Kiganjo/Mathari","Rware","Gatitu/Muruguru"," Ruringu","Kamakwa/Mukaro"],
        "Othaya":["Chinga","Iria-ini","Karima","Mahiga"],
        "Tetu":["Dedan Kimathi","Wamagana","Aguthi-Gaaki"],
       },

     "Narok" :{
        "Narok East":["Mosiro","Ildamat","Suswa","Keekonyokie"],
        "Narok North":["Olpusimoru","Olokurto","Narok Town","Melili","Nkarete'Olorropil"],
        "Narok South":["Majimoto","Melelo","Loita","Sogoo","Sagamian","Uraololulung'a"],
        "Narok West":["Ilmotik","Mara","Siana","Naikara"],
        "Transmara East":["Kilgoris Central","Lolgorian","Shankoe","Kimintet","Kenyian","Angata Barikoi"],
        "Transmara West":["Mogondo","Kapsasian","Ololmasai"],

    },

     "Tharaka Nithi" :{
         "Tharaka":["Gatunga", "Mukothima", "Nkondi", "Chiakariga", "Marimanti"],
         "Chuka/Igambang'ombe":["Mariani","Karingani", "Magumoni", "Mugwe", "Igambang'ombe"],
         "Maara":["Mitheru", "Muthambi", "Mwimbi", "Ganga", "Chogoria"],
        },

     "Trans-Nzoia" :{
        "Cherangany":["Makutano","Sinyerere","Kaplamai","Motosiet","Suwerwa","Chepsiro/Kiptoror","Sitatunga"],
        "Endebess":["Endebess","Chepchoina","Matumbei"],
        "Kiminini":["Nabiswa","Kiminini","Sikhendu","Hospital","Sirende","Waitaluk"],
        "Kwanza ":["Kapomboi","Kwanza","Keiyo","Bidii"],
        "Saboti":["Kinyoro","Matisi","saboti","Tuwani","Machewa"],
    },

     "Mandera" :{
        "Banisa":["Banisa","Guba","Kiliweheri","Dherkhale","Malkamari"],
        "Lafey":["Sala","Fino","Lafey","Warankara","AlangoGof"],
        "Mandera East":["Arabia","Libehia","Khalalio","Neboj","Township"],
        "Mandera North":["Ashabito","Guticha","Rhamu","Marothile"],
        "Mandera South":["Kutulo","Shimbir Fatuma","Elwak North","Elwak South","Wargadud"],
        "Mandera West":["Takaba South","Takaba","Lagsure","Gither","Dandu"],

    },

     "Kiambu" :{
        "Gatundu North":["Gituamba","Chania","Mang'u","Githobokoni"],
        "Gatundu South":["Kiamwangi","Kiganjo","Ndarugu","Ngenda"],
        "Githunguri":["Githunguri","Githinga","Ngewa","Komothia","Ikinu"],
        "Juja":["Juja","Murera","Kalimoni","Theta","Witethie"],
        "Kabete":["Gitaru","Muguga","Kabete","Uthiru","Nyathuna"],
        "Kiambaa":["Cianda","Karuiri","Ndenderu","Kihara","Muchatha"],
        "Kiambu":["Township","Riabai","Ndumberi","Ting,ang'a"],
        "Kikuyu":["Karai","Nachu","Sigona","Sinoo","Kikuyu"],
        "Limuru":["Limuru central","Bibirioni","Ndeiya","Limuru East","Ngeha Tigoni"],
        "Ruiru":["Gitothua","Biashara","Gatongora","Kahawa Sukari","Mwiki","Mwihoko","Kahawa","Kiuu","Wendani"],
        "Lari":["Kijabe","Nyaduma","Kirema","Kamburu"],
        "Thika Town":["Township","Kamenu","Hospital","Ngatunyaga","Ngoliba"],

    },

     "Lamu" :{
        "Lamu East":["Faza","Basuba","Kiunga"],
        "Lamu West":["Shella","Mkomani","Hindi","Mkunumbi","Hongwe","Witu","Bahari"],
        },

     "Turkana" :{
        "Loima":["Kotaruk/Lobei","Turkwel","Loima","Lokiriama/Loren"," Gippi"],
        "Turkana Central":["Kerio Delta","Kang’atotha","Kalokol","Lodwar Township","Kanamkemer"],
        "Turkana East":["Kapedo/Napeitom","Katilia","Lokori/Kochodin"],
        "Turkana North":["Kaeris","Lake Zone","Lapur","Kaaleng/Kaikor","Kibish","Nakalale"],
        "Turkana South":["Kaputir","Katilu","Lobokat","Kalapata","Lokich"],
        "Turkana West":["Kakuma","Lopur","Letea","Songot","Kalobeyei","Lokichogio","Nanaam"],
    },

     "Elgeyo-Marakwet" :{
        "Keiyo North":["Emsoo","Kamariny","Kapchemutwa","Tambach"],
        "Keiyo South":["Kaptarakwa","Chepkorio","Soy North","Soy South","Kabiemit","Metkei"],
        "Marakwet East":["Kapyego","Sambirir","Endo","Embobut / Embulot"],
        "Marakwet West":["Kapsowar","Lelan","Sengwer","Cherang’any/Chebororwa","Moiben/Kuserwo","Arror"],
        },

    "Nyandarua" :{
        "Kinangop":["Engineer","Gathara","North Kinangop","Murungaru","Kiburu","Nyakio","Magumu","Githabai"],
        "Ndaragwa":["Pondo","Kiriita","Central","Shamata"],
        "Kipipiri":["Wanjohi","Geta","Kipiriri","Githioro"],
        "Ol-Kalou":["Karau","Kanjuiri Range","Rurii","Miragine","Kaimbaga"],
        "Ol Jorok":["Gathanji","Gatima","Weru","Charagita"],
        },

};



function populateSubCounties() {
    const countySelect = document.getElementById("selectCounty");
    const subCountySelect = document.getElementById("selectSubCounty");
    const wardSelect = document.getElementById("selectWard");

    const selectedCounty = countySelect.value;

    // Clear previous options
    subCountySelect.innerHTML = "<option value='0'>Select Sub County</option>";
    wardSelect.innerHTML = "<option value='0'>-Select Ward-</option>";

    if (selectedCounty !== "0") {
        const subCounties = countyData[selectedCounty];
        for (const subCounty in subCounties) {
            const option = document.createElement("option");
            option.value = subCounty;
            option.text = subCounty;
            subCountySelect.add(option);
        }
    }
}

function populateWards() {
    const subCountySelect = document.getElementById("selectSubCounty");
    const wardSelect = document.getElementById("selectWard");

    const selectedCounty = document.getElementById("selectCounty").value;
    const selectedSubCounty = subCountySelect.value;

    // Clear previous options
    wardSelect.innerHTML = "<option value='0'>-Select Ward-</option>";

    if (selectedCounty !== "0" && selectedSubCounty !== "0") {
        const wards = countyData[selectedCounty][selectedSubCounty];
        for (const ward of wards) {
            const option = document.createElement("option");
            option.value = ward;
            option.text = ward;
            wardSelect.add(option);
        }
    }
}

function submitForm() {
    const county = document.getElementById("selectCounty").value;
    const subCounty = document.getElementById("selectSubCounty").value;
    const ward = document.getElementById("selectWard").value;

    // You can use these values to perform further actions or submit the form
    console.log("County:", county);
    console.log("Sub County:", subCounty);
    console.log("Ward:", ward);
    // Add your form submission logic here
}

