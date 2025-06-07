// Data for search results

const data = ["Anaheim Ducks", "Arizona Cardinals", "Arizona Diamondbacks",
"Atlanta Braves", "Atlanta Dream", "Atlanta Falcons", "Atlanta Hawks", "Baltimore Orioles", "Baltimore Ravens",
"Boston Bruins", "Boston Celtics", "Boston Red Sox", "Brooklyn Nets", "Buffalo Bills", "Buffalo Sabres", "Calgary Flames", 
"Carolina Hurricanes", "Carolina Panthers", "Charlotte Hornets", "Chicago Bears", "Chicago Blackhawks",
"Chicago Bulls", "Chicago Cubs", "Chicago Sky", "Chicago White Sox", "Connecticut Sun", "Cincinnati Bengals", "Cincinnati Reds",
"Cleveland Browns", "Cleveland Guardians", "Cleveland Cavaliers", "Colorado Rockies", "Colorado Avalanche", "Dallas Cowboys", "Dallas Stars",
"Dallas Mavericks", "Dallas Wings", "Denver Broncos", "Denver Nuggets", "Detroit Lions", "Detroit Pistons", "Edmonton Oilers", 
"Detroit Red Wings", "Detroit Tigers", "Florida Panthers", "Golden State Warriors", "Green Bay Packers",
"Houston Astros", "Houston Rockets", "Houston Texans", "Indiana Fever", "Indiana Pacers", "Indianapolis Colts", 
"Jacksonville Jaguars", "Kansas City Chiefs", "Kansas City Royals", "Los Angeles Angels", "Los Angeles Clippers",
"Los Angeles Chargers", "Los Angeles Kings", "Los Angeles Lakers", "Los Angeles Dodgers", "Los Angeles Rams", 
"Los Angeles Sparks", "Las Vegas Aces", "Las Vegas Raiders", "Memphis Grizzlies", "Miami Dolphins", "Miami Heat", "Miami Marlins", 
"Milwaukee Brewers", "Milwaukee Bucks", "Minnesota Timberwolves", "Minnesota Lynx", "Minnesota Twins", "Minnesota Wild", "Minnesota Vikings", 
"Montreal Canadiens", "Nashville Predators", "New England Patriots", "New Jersey Devils", "New Orleans Pelicans", "New Orleans Saints", 
"New York Giants", "New York Islanders", "New York Jets", "New York Knicks", "New York Liberty", "New York Mets",
"New York Rangers", "New York Yankees", "Oakland Athletics", "Oklahoma City Thunder", "Orlando Magic", 
"Ottawa Senators", "Paris Saint-Germain", "Philadelphia 76ers", "Philadelphia Eagles", "Philadelphia Flyers", "Philadelphia Phillies", "Phoenix Mercury", 
"Phoenix Suns", "Pittsburgh Penguins", "Pittsburgh Pirates", "Pittsburgh Steelers", "Portland Trail Blazers", "Sacramento Kings", 
"San Antonio Spurs", "San Diego Padres", "San Francisco Giants", "San Francisco 49ers", "San Jose Sharks",
"Seattle Kraken", "Seattle Mariners", "Seattle Seahawks", "Seattle Storm", "St. Louis Blues", "St. Louis Cardinals",
"Tampa Bay Buccaneers", "Tampa Bay Lightning", "Tampa Bay Rays", "Tennessee Titans", "Texas Rangers", "Toronto Blue Jays",
"Toronto Maple Leafs", "Toronto Raptors", "Utah Mammoth", "Utah Jazz", "Vancouver Canucks", "Vegas Golden Knights", "Washington Capitals",
"Washington Commanders", "Washington Mystics", "Washington Nationals", "Washington Wizards", "Winnipeg Jets"]
 

// Filters results based on input in search bar


function filterResults() {
    const query = document.getElementById('searchInput').value.toLowerCase();

    if (query === "") {
        displayResults([]);
        return;
    }

    const filteredResults = data.filter(item => item.toLowerCase().startsWith(query));
    
    displayResults(filteredResults.slice(0, 4));
}


// Displays results based on input in search bar

function displayResults(results) {
    const resultsContainer = document.getElementById('searchResults');
    resultsContainer.innerHTML = ""; // Clear previous results
    
    if (results.length === 0) {
        resultsContainer.innerHTML = ""; // if nothing is entered, nothing is displayed
    } 
    
    else {
        results.forEach(result => {
            const li = document.createElement('li');
            li.textContent = result;

            li.addEventListener('click', function(){
                // click action                 
                handleResultClick(result);
            });

            li.addEventListener('mouseover', function() {
                this.style.cursor = 'pointer'; // Change to desired cursor style
            });
              
            li.addEventListener('mouseout', function() {
                this.style.cursor = 'default'; // Revert to default cursor style
            });
        
            resultsContainer.appendChild(li);
            });
    }
}


// Redirects to the desired page, when a search result is clicked
function handleResultClick(result) {
    switch (result) {
        case 'Anaheim Ducks':
            window.location.href = "/pages/main/nhl/nhl-shop/ana-ducks.php"
            break;
        case 'Arizona Cardinals':
            window.location.href = "/pages/main/nfl/nfl-shop/ari-cardinals.php"
            break;
        case 'Arizona Diamondbacks':
            window.location.href = "/pages/main/mlb/mlb-shop/ari-diamondbacks.php"
            break;
        case 'Atlanta Braves':
            window.location.href = "/pages/main/mlb/mlb-shop/atl-braves.php"
            break;
        case 'Atlanta Dream':
            window.location.href = "/pages/main/wnba/wnba-shop/atl-dream.php"
            break;
        case 'Atlanta Falcons':
            window.location.href = "/pages/main/nfl/nfl-shop/atl-falcons.php"
            break;
        case 'Atlanta Hawks':
            window.location.href = "/pages/main/nba/nba-shop/atl-hawks.php"
            break;
        case 'Baltimore Ravens':
            window.location.href = "/pages/main/nfl/nfl-shop/bal-ravens.php"
            break;
        case 'Baltimore Orioles':
            window.location.href = "/pages/main/mlb/mlb-shop/bal-orioles.php"
            break;
        case 'Boston Bruins':
            window.location.href = "/pages/main/nhl/nhl-shop/bos-bruins.php"
            break;
        case 'Boston Celtics':
            window.location.href = "/pages/main/nba/nba-shop/bos-celtics.php"
            break;
        case 'Boston Red Sox':
            window.location.href = "/pages/main/mlb/mlb-shop/bos-red-sox.php"
            break;
        case 'Brooklyn Nets':
            window.location.href = "/pages/main/nba/nba-shop/brk-nets.php"
            break;
        case 'Buffalo Bills':
            window.location.href = "/pages/main/nfl/nfl-shop/buf-bills.php"
            break;         
        case 'Buffalo Sabres':
            window.location.href = "/pages/main/nhl/nhl-shop/buf-sabres.php"
            break;
        case 'Carolina Hurricanes':
            window.location.href = "/pages/main/nhl/nhl-shop/car-hurricanes.php"
            break;
        case 'Carolina Panthers':
            window.location.href = "/pages/main/nfl/nfl-shop/car-panthers.php"
            break;
        case 'Calgary Flames':
            window.location.href = "/pages/main/nhl/nhl-shop/cal-flames.php"
            break;
        case 'Charlotte Hornets':
            window.location.href = "/pages/main/nba/nba-shop/cha-hornets.php"
            break;
        case 'Chicago Bears':
            window.location.href = "/pages/main/nfl/nfl-shop/chi-bears.php"
            break;
        case 'Chicago Blackhawks':
            window.location.href = "/pages/main/nhl/nhl-shop/chi-blackhawks.php"
            break;
        case 'Chicago Bulls':
            window.location.href = "/pages/main/nba/nba-shop/chi-bulls.php"
            break;
        case 'Chicago Cubs':
            window.location.href = "/pages/main/mlb/mlb-shop/chi-cubs.php"
            break;
        case 'Chicago Sky':
            window.location.href = "/pages/main/wnba/wnba-shop/chi-sky.php"
            break;
        case 'Chicago White Sox':
            window.location.href = "/pages/main/mlb/mlb-shop/chi-white-sox.php"
            break;
        case 'Cincinatti Bengals':
            window.location.href = "/pages/main/nfl/nfl-shop/cin-bengals.php"
            break;
        case 'Cincinatti Reds':
            window.location.href = "/pages/main/mlb/mlb-shop/cin-reds.php"
            break;
        case 'Cleveland Browns':
            window.location.href = "/pages/main/nfl/nfl-shop/cle-browns.php"
            break;
        case 'Cleveland Cavaliers':
            window.location.href = "/pages/main/nba/nba-shop/cle-cavaliers.php"
            break;
        case 'Cleveland Guardians':
            window.location.href = "/pages/main/mlb/mlb-shop/cle-guardians.php"
            break;
        case 'Colorado Avalanche':
            window.location.href = "/pages/main/nhl/nhl-shop/col-avalanche.php"
            break;
        case 'Colorado Rockies':
            window.location.href = "/pages/main/mlb/mlb-shop/col-rockies.php"
            break;
        case 'Connecticut Sun':
            window.location.href = "/pages/main/wnba/wnba-shop/con-sun.php"
            break;
        case 'Columbus Blue Jackets':
            window.location.href = "/pages/main/nhl/nhl-shop/col-blue-jackets.php"
            break;
        case 'Dallas Cowboys': 
            window.location.href = "/pages/main/nfl/nfl-shop/dal-cowboys.php"
            break;
        case 'Dallas Stars': 
            window.location.href = "/pages/main/nhl/nhl-shop/dal-stars.php"
            break;
        case 'Dallas Mavericks':
            window.location.href = "/pages/main/nba/nba-shop/dal-mavericks.php"
            break;
        case 'Dallas Wings':
            window.location.href = "/pages/main/wnba/wnba-shop/dal-wings.php"
            break;
        case 'Denver Broncos':
            window.location.href = "/pages/main/nfl/nfl-shop/den-broncos.php"
            break;
        case 'Denver Nuggets':
            window.location.href = "/pages/main/nba/nba-shop/den-nuggets.php"
            break;
        case 'Detroit Lions':
            window.location.href = "/pages/main/nfl/nfl-shop/det-lions.php"
            break;
        case 'Detroit Pistons':
            window.location.href = "/pages/main/nba/nba-shop/det-pistons.php"
            break;
        case 'Detroit Red Wings':
            window.location.href = "/pages/main/nhl/nhl-shop/det-red-wings.php"
            break;
        case 'Detroit Tigers':
            window.location.href = "/pages/main/mlb/mlb-shop/det-tigers.php"
            break;
        case 'Edmonton Oilers':
            window.location.href = "/pages/main/nhl/nhl-shop/edm-oilers.php"
            break;
        case 'Florida Panthers':
            window.location.href = "/pages/main/nhl/nhl-shop/fla-panthers.php"
            break;
        case 'Green Bay Packers':
            window.location.href = "/pages/main/nfl/nfl-shop/gb-packers.php"
            break;
        case 'Golden State Warriors':
            window.location.href = "/pages/main/nba/nba-shop/gs-warriors.php"
            break;
        case 'Houston Astros':
            window.location.href = "/pages/main/mlb/mlb-shop/hou-astros.php"
            break;
        case 'Houston Rockets':
            window.location.href = "/pages/main/nba/nba-shop/hou-rockets.php"
            break;
        case 'Houston Texans':
            window.location.href = "/pages/main/nfl/nfl-shop/hou-texans.php"
            break;
        case 'Indiana Fever':
            window.location.href = "/pages/main/wnba/wnba-shop/ind-fever.php"
            break;
        case 'Indiana Pacers':
            window.location.href = "/pages/main/nba/nba-shop/ind-pacers.php"
            break;
        case 'Indianapolis Colts':
            window.location.href = "/pages/main/nfl/nfl-shop/ind-colts.php"
            break;
        case 'Jaxsonville Jaguars':
            window.location.href = "/pages/main/nfl/nfl-shop/jax-jags.php"
            break;
        case 'Kansas City Chiefs':
            window.location.href = "/pages/main/nfl/nfl-shop/kc-chiefs.php"
            break;
        case 'Kansas City Royals':
            window.location.href = "/pages/main/mlb/mlb-shop/kc-royals.php"
            break;
        case 'Las Vegas Aces':
            window.location.href = "/pages/main/wnba/wnba-shop/lv-aces.php"
            break;
        case 'Las Vegas Raiders':
            window.location.href = "/pages/main/nfl/nfl-shop/lv-raiders.php"
            break; 
        case 'Los Angeles Angels':
            window.location.href = "/pages/main/mlb/mlb-shop/la-angels.php"
            break;
        case 'Los Angeles Chargers':
            window.location.href = "/pages/main/nfl/nfl-shop/la-chargers.php"
            break;
        case 'Los Angeles Clippers':
            window.location.href = "/pages/main/nba/nba-shop/la-clippers.php"
            break;
        case 'Los Angeles Dodgers':
            window.location.href = "/pages/main/mlb/mlb-shop/la-dodgers.php"
            break;
        case 'Los Angeles Lakers':
            window.location.href = "/pages/main/nba/nba-shop/la-lakers.php"
            break;
        case 'Los Angeles Kings':
            window.location.href = "/pages/main/nhl/nhl-shop/la-kings.php"
            break;
        case 'Los Angeles Rams':
            window.location.href = "/pages/main/nfl/nfl-shop/la-rams.php"
            break;
        case 'Los Angeles Sparks':
            window.location.href = "/pages/main/wnba/wnba-shop/la-sparks.php"
            break;   
        case 'Memphis Grizzlies':
            window.location.href = "/pages/main/nba/nba-shop/mem-grizzlies.php"
            break;
        case 'Miami Heat':
            window.location.href = "/pages/main/nba/nba-shop/mia-heat.php"
            break;
        case 'Miami Dolphins':
            window.location.href = "/pages/main/nfl/nfl-shop/mia-dolphins.php"
            break;
        case 'Miami Marlins':
            window.location.href = "/pages/main/mlb/mlb-shop/mia-marlins.php"
            break;
        case 'Milwaukee Brewers':
            window.location.href = "/pages/main/mlb/mlb-shop/mil-brewers.php"
            break;
        case 'Milwaukee Bucks':
            window.location.href = "/pages/main/nba/nba-shop/mil-bucks.php"
            break;
        case 'Minnesota Lynx':
            window.location.href = "/pages/main/wnba/wnba-shop/min-lynx.php"
            break;
        case 'Minnesota Timberwolves':
            window.location.href = "/pages/main/nba/nba-shop/min-timberwolves.php"
            break;
        case 'Minnesota Twins':
            window.location.href = "/pages/main/mlb/mlb-shop/min-twins.php"
            break;
        case 'Minnesota Vikings':
            window.location.href = "/pages/main/nfl/nfl-shop/min-vikings.php"
            break;
        case 'Minnesota Wild':
            window.location.href = "/pages/main/nhl/nhl-shop/min-wild.php"
            break;
        case 'Montreal Canadiens':
            window.location.href = "/pages/main/nhl/nhl-shop/mtl-canadiens.php"
            break;
        case 'Nashville Predators':
            window.location.href = "/pages/main/nhl/nhl-shop/nsh-predators.php"
            break;
        case 'New England Patriots':
            window.location.href = "/pages/main/nfl/nfl-shop/ne-patriots.php"
            break;
        case 'New Jersey Devils':
            window.location.href = "/pages/main/nhl/nhl-shop/nj-devils.php"
            break;
        case 'New Orleans Pelicans':
            window.location.href = "/pages/main/nba/nba-shop/nola-pelicans.php"
            break;
        case 'New Orleans Saints':
            window.location.href = "/pages/main/nfl/nfl-shop/no-saints.php"
            break;
        case 'New York Giants':
            window.location.href = "/pages/main/nfl/nfl-shop/ny-giants.php"
            break;
        case 'New York Jets':
            window.location.href = "/pages/main/nfl/nfl-shop/ny-jets.php"
            break;
        case 'New York Knicks':
            window.location.href = "/pages/main/nba/nba-shop/ny-knicks.php"
            break;
        case 'New York Liberty':
            window.location.href = "/pages/main/wnba/wnba-shop/ny-liberty.php"
            break;
        case 'New York Islanders':
            window.location.href = "/pages/main/nhl/nhl-shop/ny-islanders.php"
            break;
        case 'New York Mets':
            window.location.href = "/pages/main/mlb/mlb-shop/ny-mets.php"
            break;
        case 'New York Rangers':
            window.location.href = "/pages/main/nhl/nhl-shop/ny-rangers.php"
            break;
        case 'New York Yankees':
            window.location.href = "/pages/main/mlb/mlb-shop/ny-yankees.php"
            break;
        case 'Oakland Athletics':
            window.location.href = "/pages/main/mlb/mlb-shop/oak-athletics.php"
            break;
        case 'Oklahoma City Thunder':
            window.location.href = "/pages/main/nba/nba-shop/okc-thunder.php"
            break;
        case 'Orlando Magic':
            window.location.href = "/pages/main/nba/nba-shop/orl-magic.php"
            break;
        case 'Ottawa Senators':
            window.location.href = "/pages/main/nhl/nhl-shop/ott-senators.php"
            break;
        case 'Paris Saint-Germain':
            window.location.href = "/pages/main/soccer/leagues/ligue-1/ligue-1-shop/psg.php"
            break;
        case 'Philadelphia 76ers':
            window.location.href = "/pages/main/nba/nba-shop/phi-76ers.php"
            break;
        case 'Philadelphia Eagles':
            window.location.href = "/pages/main/nfl/nfl-shop/phi-eagles.php"
            break;
        case 'Philadelphia Flyers':
            window.location.href = "/pages/main/nhl/nhl-shop/phi-flyers.php"
            break;
        case 'Philadelphia Phillies':
            window.location.href = "/pages/main/mlb/mlb-shop/phi-phillies.php"
            break;
        case 'Phoenix Mercury':
            window.location.href = "/pages/main/wnba/wnba-shop/phx-mercury.php"
            break;
        case 'Phoenix Suns':
            window.location.href = "/pages/main/nba/nba-shop/phx-suns.php"
            break;
        case 'Pittsburgh Penguins':
            window.location.href = "/pages/main/nhl/nhl-shop/pit-penguins.php"
            break;
        case 'Pittsburgh Pirates':
            window.location.href = "/pages/main/mlb/mlb-shop/pit-pirates.php"
            break;
        case 'Pittsburgh Steelers':
            window.location.href = "/pages/main/nfl/nfl-shop/pit-steelers.php"
            break;
        case 'Portland Trail Blazers':
            window.location.href = "/pages/main/nba/nba-shop/por-trail-blazers.php"
            break;
        case 'Sacramento Kings':
            window.location.href = "/pages/main/nba/nba-shop/sac-kings.php"
            break;
        case 'San Antonio Spurs':
            window.location.href = "/pages/main/nba/nba-shop/sa-spurs.php"
            break;
        case 'San Diego Padres':
            window.location.href = "/pages/main/mlb/mlb-shop/sd-padres.php"
            break;
        case 'San Francisco 49ers':
            window.location.href = "/pages/main/nfl/nfl-shop/sf-49ers.php"
            break;
        case 'San Jose Sharks':
            window.location.href = "/pages/main/nhl/nhl-shop/sj-sharks.php"
            break;
        case 'San Francisco Giants':
            window.location.href = "/pages/main/mlb/mlb-shop/sf-giants.php"
            break;
        case 'Seattle Kraken':
            window.location.href = "/pages/main/nhl/nhl-shop/sea-kraken.php"
            break;
        case 'Seattle Mariners':
            window.location.href = "/pages/main/mlb/mlb-shop/sea-mariners.php"
            break;
        case 'Seattle Seahawks':
            window.location.href = "/pages/main/nfl/nfl-shop/sea-seahawks.php"
            break;
        case 'Seattle Storm':
            window.location.href = "/pages/main/wnba/wnba-shop/sea-storm.php"
            break;
        case 'St. Louis Blues':
            window.location.href = "/pages/main/nhl/nhl-shop/stl-blues.php"
            break;
        case 'St. Louis Cardinals':
            window.location.href = "/pages/main/mlb/mlb-shop/stl-cardinals.php"
            break;
        case 'Tampa Bay Buccaneers':
            window.location.href = "/pages/main/nfl/nfl-shop/tb-buccaneers.php"
            break;
        case 'Tampa Bay Lightning':
            window.location.href = "/pages/main/nhl/nhl-shop/tb-lightning.php"
            break;
        case 'Tampa Bay Rays':
            window.location.href = "/pages/main/mlb/mlb-shop/tb-rays.php"
            break;
        case 'Tennessee Titans':
            window.location.href = "/pages/main/nfl/nfl-shop/ten-titans.php"
            break; 
        case 'Texas Rangers':
            window.location.href = "/pages/main/mlb/mlb-shop/tex-rangers.php"
            break;    
        case 'Toronto Blue Jays':
            window.location.href = "/pages/main/mlb/mlb-shop/tor-blue-jays.php"
            break;
        case 'Toronto Maple Leafs':
            window.location.href = "/pages/main/nhl/nhl-shop/tor-maple-leafs.php"
            break;
        case 'Toronto Raptors':
            window.location.href = "/pages/main/nba/nba-shop/tor-raptors.php"
            break;
        case 'Utah Mammoth':
            window.location.href = "/pages/main/nhl/nhl-shop/utah-mammoth.php"
            break;
        case 'Utah Jazz':
            window.location.href = "/pages/main/nba/nba-shop/utah-jazz.php"
            break;
        case 'Vancouver Canucks':
            window.location.href = "/pages/main/nhl/nhl-shop/van-canucks.php"
            break;
        case 'Vegas Golden Knights':
            window.location.href = "/pages/main/nhl/nhl-shop/vgs-golden-knights.php"
            break;
        case 'Washington Capitals':
            window.location.href = "/pages/main/nhl/nhl-shop/was-capitals.php"
            break;
        case 'Washington Commanders':
            window.location.href = "/pages/main/nfl/nfl-shop/was-commanders.php"
            break;
        case 'Washington Mystics':
            window.location.href = "/pages/main/wnba/wnba-shop/was-mystics.php"
            break;
        case 'Washington Nationals':
            window.location.href = "/pages/main/mlb/mlb-shop/was-nationals.php"
            break;
        case 'Washington Wizards':
            window.location.href = "/pages/main/nba/nba-shop/was-wizards.php"
            break;
        case 'Winnipeg Jets':
            window.location.href = "/pages/main/nhl/nhl-shop/wpg-jets.php"
            break;
        default:
            break;
    }
  }