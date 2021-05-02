import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-edit-rating-type',
  templateUrl: './edit-rating-type.component.html',
  styleUrls: ['./edit-rating-type.component.css']
})
export class EditRatingTypeComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit(): void {
  }

  submit() {
    this.router.navigate(['/admin/subscriptions']);
  }
}
