import { Component, OnInit } from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';

import {CribsdataService} from './../services/cribsdata.service';

//import { cribs } from './../data/cribs';

@Component({
  selector: 'app-crib-listing',
  templateUrl: './crib-listing.component.html',
  styleUrls: ['./crib-listing.component.css']
})
export class CribListingComponent implements OnInit {

  cribs: Array<any>;
  error: string;
  constructor(
    private http:Http,
    private cribsService: CribsdataService
  ) { }

  ngOnInit() {
  	// this.http.get('/api/test').map(res=>res.json())
  	// .subscribe(
  	// 		data => this.cribs = data,
   //      error => this.error = error.statusText
  	// 	);

    this.cribsService.getData('/api/public/properties/CA/Alameda').subscribe(
        data => this.cribs = data.data,
        error => this.error = error.statusText
      );
  }

}
