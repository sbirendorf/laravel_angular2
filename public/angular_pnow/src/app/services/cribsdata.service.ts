import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class CribsdataService {

  constructor(private http:Http) { }

  getData(url){
  	//return this.http.get('/api/test').map(res => res.json())
  	return this.http.get(url).map(res => res.json())
  }
}
