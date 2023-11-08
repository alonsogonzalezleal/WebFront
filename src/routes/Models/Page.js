export class Page {

    static getPageNumber(){
        try {
            const url = window.location.href;
            const parameters = url.split('/');
            return parameters[5];
        } catch (error) {
            console.log(error);
            return 'Error';
        }
    }
}