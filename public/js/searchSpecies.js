import {Search} from './export_searchSpecies.js';

const mysearchf = document.querySelector('#uib_buscador_input');
const ul_add_lif = document.querySelector('#show_list');
const myurlf = '/plantas/search';

const searchFamily = new Search(myurlf, mysearchf, ul_add_lif);

searchFamily.InputSearch();
