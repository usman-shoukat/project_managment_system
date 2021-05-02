import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DataTablesModule } from 'angular-datatables';
import { RatingTypeComponent } from './rating-type.component';
import { RatingTypeRoutingModule } from './rating-type-routing.module';

@NgModule({
  declarations: [ RatingTypeComponent ],
  imports: [
    CommonModule,
    RatingTypeRoutingModule,
    DataTablesModule
  ]
})
export class RatingTypeModule { }
