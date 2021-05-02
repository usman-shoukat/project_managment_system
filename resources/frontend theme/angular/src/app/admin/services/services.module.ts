import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { DataTablesModule } from 'angular-datatables';
import { ServicesComponent } from './services.component';
import { ServicesRoutingModule } from './services-routing.module';

@NgModule({
  declarations: [ServicesComponent],
  imports: [
    CommonModule,
    ServicesRoutingModule,
    FormsModule,
    DataTablesModule
  ]
})
export class SpecialitiesModule { }
