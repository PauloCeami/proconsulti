import axios from "axios";

export class UsuarioService {

    // api 
    static baseUrl = 'http://apptestplangroup.test/api/v1';

    static createUsuario(usuario) {
        let dataUrl = `${this.baseUrl}/produtos`;
        return axios.post(dataUrl, usuario);
    }
}