import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RatingsComponent } from './ratings.component';
import { RatingsRoutingModule } from './ratings-routing.module';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

@NgModule({
  declarations: [RatingsComponent],
  imports: [CommonModule, RatingsRoutingModule, NgbModule],
})
export class RatingsModule {}
