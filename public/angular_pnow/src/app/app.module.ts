import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { CribListingComponent } from './crib-listing/crib-listing.component';
import { CribCardComponent } from './crib-card/crib-card.component';
import { CribsdataService } from './services/cribsdata.service';

@NgModule({
  declarations: [
    AppComponent,
    CribListingComponent,
    CribCardComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [CribsdataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
