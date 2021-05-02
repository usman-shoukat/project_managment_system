import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AvailabilityRoutingModule } from './availability-routing.module';
import { AvailabilityComponent } from './availability.component';
import { NgSelect2Module } from 'ng-select2';

@NgModule({
  declarations: [AvailabilityComponent],
  imports: [CommonModule, AvailabilityRoutingModule, NgSelect2Module],
})
export class AvailabilityModule {}
