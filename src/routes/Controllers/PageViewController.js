import { Page } from '../Models/Page.js';

export class PageViewController {

    static getPageNumber(){
        try {
            return Page.getPageNumber();
        } catch (error) {
            console.log(error);
            return 'Error';
        }
    }
}